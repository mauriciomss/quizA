<?php $uri  = service('uri'); ?>

<!DOCTYPE html >
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="wide wow-animation" lang="es-AR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"> <!--<![endif]-->
<head>

    <?php 
        $og_image = base_url('assets/dist/img/logo.png');
        list($width, $height, $type, $attr) = getimagesize( $og_image );
        $imageTypeArray = array(0=>'unknown',1=>'gif',2=>'jpeg',3=>'png',4=>'swf',5=>'psd',6=>'bmp',7=>'tiff_ii',8=>'tiff_mm',9=>'jpc',10=>'jp2',11=>'jpx',12=>'jb2',13=>'swc',14=>'iff',15=>'wbmp',16=>'xbm',17=>'ico',18=>'count');
    ?>

    <title><?=$title;?> | Chacra 71</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="icon" type="image/png" href="<?=base_url('assets/dist/img/logo.png');?>">
    <link rel="shortcut icon" href="<?=base_url('assets/dist/img/logo.png');?>" />
    <meta name="description" content="Chacra 71 - Posadas - Misiones" />
    <meta name="keywords" content="Chacra 71 - Posadas - Misiones" />
    <meta name="author" content="mauriciomss - https://mauriciomss.github.io/">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <link rel="canonical" href="<?=current_url();?>" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?=$title;?>" />
    <meta property="og:description" content="Chacra 71 - Posadas - Misiones" />
    <meta property="og:url" content="<?=current_url();?>" />
    <meta property="og:site_name" content="Chacra 71 - Posadas - Misiones" />
    <meta property="article:publisher" content="https://www.facebook.com/" />
    <meta property="article:tag" content="Barrios" />
    <meta property="article:tag" content="Posadas" />
    <meta property="article:section" content="Información General" />
    <meta property="og:updated_time" content="<?=date('Y-m-d').'T03:01:01-03:00'?>" />
    <meta property="og:image" content="<?=$og_image;?>" />
    <meta property="og:image:secure_url" content="<?=$og_image;?>" />
    <meta property="og:image:width" content="<?=$width;?>" />
    <meta property="og:image:height" content="<?=$height;?>" />
    <meta property="og:image:alt" content="eventos" />
    <meta property="og:image:type" content="image/<?=$imageTypeArray[$type];?>" />
    <meta property="article:published_time" content="<?=date('Y-m-d').'T03:01:01-03:00'?>" />
    <meta property="article:modified_time" content="<?=date('Y-m-d').'T03:01:01-03:00'?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?=$title;?>" />
    <meta name="twitter:description" content="Chacra 71 - Posadas - Misiones" />
    <meta name="twitter:image" content="<?=$og_image;?>" />
    <?php /*<meta name="twitter:site" content="@" />*/?>
    <?php /*<meta name="twitter:creator" content="@" />*/?>
    <?php /*<meta name="twitter:label1" content="Escrito por" />*/?>
    <?php /*<meta name="twitter:data1" content="mauriciomss@gmail.com" />*/?>
    <?php /*<meta name="twitter:label2" content="Barrios" />*/?>
    <?php /*<meta name="twitter:data2" content="Chacra 71 - Posadas - Misiones" />*/?>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('assets/dist/css/adminlte.css');?>">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?=base_url('assets/dist/img/logo.png');?>" alt="logo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?=base_url('assets/dist/img/logo.png');?>" alt="Logo" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">Chacra 71</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="." class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Inicio
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?=$title;?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?=base_url();?>">Inicio</a></li>
                                <?php if ($uri->getTotalSegments() == 1): ?>
                                <li class="breadcrumb-item active"><?=$title;?></li>
                                <?php endif ?>

                                <?php if ($uri->getTotalSegments() > 1): ?>
                                    <?php if ($uri->getSegment(1)!='home'): ?>
                                    <li class="breadcrumb-item"><a href="<?=base_url($uri->getSegment(1));?>"><?=ucfirst($uri->getSegment(1));?></a></li>
                                    <?php endif ?>
                                <li class="breadcrumb-item active"><?=$title;?></li>
                                <?php endif ?>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">