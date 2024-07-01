<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Inicio';

        return view('Home', $data);
    }

    public function coordenadas() //: string
    {
        $luminaria = [
            [
                "problema" => "No anda",
                "direccion" => "Miño 3654",
                "imagen" => "http://localhost/chacra71/assets/dist/img/logo.png",
                "latitud" => -27.381221988814545,
                "longitud" => -55.916646268651796,
                "icono" => "lighthouse-no.png",
            ],
            [
                "problema" => "No anda",
                "direccion" => "Luchessi 3980",
                "imagen" => "http://localhost/chacra71/assets/dist/img/logo.png",
                "latitud" => -27.38067419397892,
                "longitud" => -55.91704055340788,
                "icono" => "lighthouse-no.png",
            ],
        ];

        $data = [
            "coordenadas" => $luminaria,
        ];

        return $this->response->setJSON($data);

    }
}
