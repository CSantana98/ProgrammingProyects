<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Facturation System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--==============================
       PLUGINS DE CSS
  ===================================-->
  <!-- Icono de la pagina -->
  <link rel="icon" href="Views/Images/Templates/Logocorto.png">

  <link rel="stylesheet" href="Views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Views/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="Views/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Views/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="Views/dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="Views/plugins/iCheck/all.css">
  <!-- DataTable -->
  <link rel="stylesheet" href="Views/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="Views/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="Views/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- Morris.js Charts -->
  <link rel="stylesheet" href="Views/bower_components/morris.js/morris.css">




 <!--==============================
      PLUGINS DE JAVASCRIPTS
 ===================================-->
  <script src="Views/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="Views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="Views/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="Views/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="Views/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="Views/dist/js/demo.js"></script>
  <!-- DataTable -->
  <script src="Views/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="Views/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="Views/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="Views/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
  <!-- Sweetalert2 -->
  <script src="Views/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="Views/plugins/iCheck/icheck.min.js"></script>
  <!-- InputMask -->
  <script src="Views/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="Views/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="Views/plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <!-- jQueryNumber -->
  <script src="Views/plugins/jqueryNumber/jquerynumber.min.js"></script>
  <!-- Daterange picker -->
  <script src="Views/bower_components/moment/min/moment.min.js"></script>
  <script src="Views/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- Morris.js Charts -->
  <script src="Views/bower_components/raphael/raphael.min.js"></script>
  <script src="Views/bower_components/morris.js/morris.min.js"></script>
  <!-- Chartsjs Charts -->
  <script src="Views/bower_components/chart.js/Chart.js"></script>


</head>

<!--==============================
     BODY DOCUMENT
===================================-->

<body class="hold-transition skin-blue sidebar-mini login-page">

  <?php
    if(isset($_SESSION["IniciarSesion"]) && $_SESSION["IniciarSesion"] == "ok"){

          echo '<div class="wrapper">';
          /*=============================================>>>>>
          HEADER - Logotipo, Barra de Navegacion
          ===============================================>>>>>*/
          include "modules/head.php";
          /*=============================================>>>>>
          MENU - Menu Lateral
          ===============================================>>>>>*/
          include "modules/menu.php";
          /*=============================================>>>>>
          CONTENIDO
          ===============================================>>>>>*/
          if(isset($_GET["ruta"])){
            if($_GET["ruta"] == "homepage" ||
               $_GET["ruta"] == "users" ||
               $_GET["ruta"] == "categories" ||
               $_GET["ruta"] == "productos" ||
               $_GET["ruta"] == "clientes" ||
               $_GET["ruta"] == "admin-ventas" ||
               $_GET["ruta"] == "crear-ventas" ||
               $_GET["ruta"] == "editar-ventas" ||
               $_GET["ruta"] == "reporte-ventas" ||
               $_GET["ruta"] == "cerrar-session"){

               include "modules/".$_GET["ruta"].".php";
            }else {
              include "modules/404.php";
            }
          }else {
            include "modules/homepage.php";
          }
          /*=============================================>>>>>
          FOOTER
          ===============================================>>>>>*/
          include "modules/footer.php";

          echo '</div>';

          }else {
            include "modules/login.php";
          }
    ?>

    <script src="Views/js/template.js"></script>
    <script src="Views/js/users.js"></script>
    <script src="Views/js/categories.js"></script>
    <script src="Views/js/productos.js"></script>
    <script src="Views/js/clientes.js"></script>
    <script src="Views/js/ventas.js"></script>
    <script src="Views/js/reportes.js"></script>
</body>
</html>
