

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PROYECTO HERMES V_1 JH</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">


<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.js"></script>

<body class="hold-transition sidebar-mini login-page">
<!-- Site wrapper -->


<?php

if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){


    echo '<script>
        document.addEventListener("DOMContentLoaded", function(){
            document.body.classlist.remove("login-page");
        });
    </script>';

echo '<div class="wrapper">';
include "modulos/cabezote.php";
include "modulos/menu.php";

if (isset ($_GET['ruta'])){
    if ($_GET['ruta'] == "inicio" ||
        $_GET['ruta'] == "usuario" ||
        $_GET['ruta'] == "permisos" ||
        $_GET['ruta'] == "inventario" ||
        $_GET['ruta'] == "recepcion_traspaso" ||
        $_GET['ruta'] == "reservas" ||
        $_GET['ruta'] == "inmediatas" ||
        $_GET['ruta'] == "autorizados" ||
        $_GET['ruta'] == "solicitudpendiente" ||
        $_GET['ruta'] == "devoluciones" ||
        $_GET['ruta'] == "salidas" ||
        $_GET['ruta'] == "reportes" ||
        $_GET['ruta'] == "salir") 
        {
        include "modulos/".$_GET['ruta'].".php";
    }else{
        include "modulos/404.php";
    }
}

include "modulos/footer.php";
echo '</div>';
echo '<!-- ./wrapper -->';
}else{
    include "modulos/login.php";
}
?>

</body>
</head>

