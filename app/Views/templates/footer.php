
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong><a href="https://mauriciomss.github.io/">mauriciomss</a> - <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?=base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?=base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url('assets/dist/js/adminlte.js');?>"></script>

    <!-- PAGE PLUGINS -->

    <!-- AdminLTE for demo purposes -->
    <script src="<?=base_url('assets/dist/js/demo.js');?>"></script>

    <?php 
        
        $router = service('router'); 
        $controller = $router->controllerName(); //\App\Controllers\Personas
        $method = "";//$router->methodName();
        $controller = str_replace("\App\Controllers\\", '', $controller);
        $include = "JS-" . ucfirst($controller) . ucfirst($method) . ".php";
        if ( file_exists( dirname( __FILE__ )."/".$include ) ) {
            include $include;
        }
    ?>

</body>
</html>
