<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>App V1.0 | Iniciar Sesión</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="plugins/waitme/waitme.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page" style="background-color: #F5F5F5">
<div class="box login-box box-danger">
    <div class="login-logo" style="margin: 10px 0 5px 0">
        <!--                <img src="dist/img/logo_universus.png" alt="Universus.pe"><br />-->
        <a href="#"><b>Inicio</b> Sesión</a>
    </div>
    <!-- /.login-logo -->
    <div class="box-danger login-box-body" id="centrado">
        <form action="#" method="post">
            <div class="form-group has-feedback">
                <input id="tbUsuario" class="form-control"  placeholder="Usuario">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="tbClave" type="password" class="form-control" placeholder="Contraseña">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center" >
                    <button id="btnIniciar" type="button" class="btn btn-block btn-danger btn-flat">Iniciar Sesión</button>
                </div>
            </div>
        </form>
        <div class="row" style="margin-top: 15px">
            <div class="col-xs-12 text-right text-sm">
                <a href="#">Olvidé mi contraseña</a>
            </div>
        </div>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/waitme/waitme.min.js"></script>
<script src="plugins/bootbox.min.js"></script>

<script src="dist/js/login.js"></script>
</body>
</html>
