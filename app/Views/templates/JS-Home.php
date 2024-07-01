<?php /* ?>
<link rel="stylesheet" href="<?=base_url('assets/plugins/OpenLayers/ol.css');?>">
<script type="text/javascript" src="<?=base_url('assets/plugins/OpenLayers/ol.js');?>"></script>
<?php */ ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ol3/4.2.0/ol.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/ol3/4.2.0/ol.js"></script>

<link rel="stylesheet" href="<?=base_url('assets/plugins/OpenLayers/ol3-popup.css');?>">
<script type="text/javascript" src="<?=base_url('assets/plugins/OpenLayers/ol3-popup.js');?>"></script>


<script type="text/javascript">
let ultimaCapa; // Para removerla cada vez que se selecciona otra categoría

const LATITUD_CENTRO = -27.38076433937056,
    LONGITUD_CENTRO = -55.916582126169224,
    ZOOM = 17;

const mapa = new ol.Map({
    target: 'mapa', // el id del elemento en donde se monta
    layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM()
        })
    ],
    view: new ol.View({
        center: ol.proj.fromLonLat([LONGITUD_CENTRO, LATITUD_CENTRO]),
        zoom: ZOOM,
    }),
    interactions: ol.interaction.defaults({mouseWheelZoom:false}),
});

const refrescarMapaConCategoria = () => {
    fetch(`<?=base_url('home/coordenadas');?>`)
        .then(datos => datos.json())
        .then(coordenadasConIcono => {
            dibujarMarcadoresEnMapa(coordenadasConIcono);
        });
};

const dibujarMarcadoresEnMapa = coordenadasConIcono => {
    console.log( coordenadasConIcono );
    if (ultimaCapa) {
        mapa.removeLayer(ultimaCapa);
    }
    const { coordenadas } = coordenadasConIcono;

    const marcadores = [];
    coordenadas.forEach(coordenada => {
        let marcador = new ol.Feature({
            geometry: new ol.geom.Point(
                ol.proj.fromLonLat([coordenada.longitud, coordenada.latitud])
            ),
            problema: coordenada.problema,
            direccion: coordenada.direccion,
            imagen: coordenada.imagen,
        });
        marcador.setStyle(new ol.style.Style({
            image: new ol.style.Icon(({
                src: "<?=base_url('assets/dist/img/icons/');?>"+coordenada.icono,
            }))
        }));
        marcadores.push(marcador);
    });
    ultimaCapa = new ol.layer.Vector({
        source: new ol.source.Vector({
            features: marcadores,
        }),
    });
    mapa.addLayer(ultimaCapa);
};

const refrescarMapaConCategoriaSeleccionada = () => refrescarMapaConCategoria()

/*
var popup = new ol.Overlay.Popup();
mapa.addOverlay(popup);
mapa.on('singleclick', function(evt) {
    var prettyCoord = ol.coordinate.toStringHDMS(ol.proj.transform(evt.coordinate, 'EPSG:3857', 'EPSG:4326'), 2);
    popup.show(evt.coordinate, '<div><h2>Coordinates</h2><p>' + prettyCoord + '</p></div>');
});
*/

//Creamos el popup
var container = document.getElementById('popup'),
    content_element = document.getElementById('popup-content'),
    closer = document.getElementById('popup-closer');
closer.onclick = function() {
    overlay.setPosition(undefined);
    closer.blur();
    return false;
};
//var overlay = new Overlay({
var overlay = new ol.Overlay({
    element: container,
    autoPan: true,
    offset: [0, -10]
});
mapa.addOverlay(overlay);
mapa.on('click', function(evt){
    var feature = mapa.forEachFeatureAtPixel(evt.pixel,
      function(feature, layer) {
        return feature;
      });
    if (feature) {
        var geometry = feature.getGeometry();
        var coord = geometry.getCoordinates();
        
        var content = '<h3>' + feature.get('problema') + '</h3>';
        content += '<h5>' + feature.get('direccion') + '</h5>';
        content += '<img src="' + feature.get('imagen') + '" height="200px">';
        content_element.innerHTML = content;
        overlay.setPosition(coord);
        
        //console.info(feature.getProperties());
    }
});




// Algunos eventos que podrían ser de utilidad

/*
mapa.on('singleclick', function(evt) {
    var feature = mapa.forEachFeatureAtPixel(evt.pixel, function(feature, layer) {
        // Aquí se puede filtrar la feature
        return feature;
    });
    if (feature) {
        console.log("Click en: ", feature);
    }
});

let zoomActual = mapa.getView().getZoom();
mapa.on('moveend', function(e) {
    let nuevoZoom = mapa.getView().getZoom();
    if (zoomActual != nuevoZoom) {
        console.log('Nuevo zoom: ' + nuevoZoom);
        zoomActual = nuevoZoom;
    }
});
*/

// Al inicio de todo, obtener con la primer categoría
refrescarMapaConCategoriaSeleccionada();

</script>