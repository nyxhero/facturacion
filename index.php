<?php
include_once("plantilla_validar.php");
//define('RAIZ_APLICACION', dirname(__FILE__));
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>App V1.0</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">-->
    <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->

    <link rel="stylesheet" href="plugins/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/skin-red.min.css">

    <link rel="stylesheet" href="plugins/datatables/media/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="plugins/datatables/extensions/Buttons/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="plugins/datatables/extensions/Buttons/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="plugins/datatables/extensions/Select/css/select.bootstrap.min.css">
    <link rel="stylesheet" href="plugins/datatables/extensions/Select/css/select.dataTables.min.css">
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="plugins/select2/select2.min.css">

    <link rel="stylesheet" href="dist/css/estilos.css">

    <link rel="stylesheet" href="plugins/waitme/waitme.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="plugins/ajax/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="plugins/ajax/respond/1.4.2/respond.min.js"></script>

    <![endif]-->



</head>

<!--<body class="hold-transition skin-red fixed sidebar-mini">-->
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <a href="#" class="logo">
            <span class="logo-mini"><b>U</b>pe</span>
            <span class="logo-lg"><b>App V1.0</b>.pe</span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Navegación</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="imagenes/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $_SESSION['nombre'] ; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="imagenes/user2-160x160.jpg" class="img-circle" alt="User Image">
                                <p>
                                    <?php echo $_SESSION['nombre'] ; ?> <br />
                                </p>
                            </li>

                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="cerrarsesion.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php include_once ("plantilla_menu_izq.php"); ?>

    <div id="cuerpoPagina" class="content-wrapper">
        <?php include_once ("pages/contenido.php"); ?>

    </div>


    <?php include_once ("plantilla_pie.php") ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>

<script src="plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/media/js/dataTables.bootstrap.min.js"></script>
<script src="plugins/datatables/media/js/jquery.dataTables.default.js"></script>

<script src="plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
<script src="plugins/datatables/extensions/Select/js/dataTables.select.min.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="plugins/datepicker/locales/bootstrap-datepicker.es.js"></script>
<script src="plugins/select2/select2.full.min.js"></script>
<script src="plugins/select2/i18n/es.js"></script>
<script src="plugins/validator.min.js"></script>

<script src="plugins/waitme/waitme.min.js"></script>
<script src="plugins/bootbox.min.js"></script>
<script src="plugins/toastr/toastr.min.js"></script>
<script src="plugins/toastr/jquery.toast.min.js"></script>

<script src="dist/js/index.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->


</body>
</html>
