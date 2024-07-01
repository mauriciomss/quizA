<?php include 'templates/header.php'; ?>

<div class="container-fluid">
    
    <!-- Info boxes -->
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1">
                    <i class="fas fa-lightbulb"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Luminarias problemas</span>
                    <span class="info-box-number">
                        1
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-12 text-center">
            <p id="estado"></p>
        </div>
        <div class="col-12">
            <div id="mapa" style="min-height: 500; height: 600px;"></div>
            <div id="popup" class="ol-popup">
                <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                <div id="popup-content"></div>
            </div>
        </div>
    </div>    

</div><!--/. container-fluid -->

<?php include 'templates/footer.php'; ?>
