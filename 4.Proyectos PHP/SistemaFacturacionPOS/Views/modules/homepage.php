<div class="content-wrapper">

  <section class="content-header">
    <h1>
      <i class="fa fa-home"></i> Pagina de Inicio
    </h1>
    <ol class="breadcrumb">
      <li><a href="homepage"><i class="fa fa-home"></i> Inicio</a></li>
      <li class="active">Pagina Principal</li>
    </ol>
  </section>


  <section class="content">

    <div class="row">
      <?php
        if($_SESSION["perfil"] =="Administrador"){
          include "homepage/cajas-superiores.php";
        }
      ?>
    </div>

    <div class="row">

       <div class="col-lg-12">
         <?php
          if($_SESSION["perfil"] =="Administrador"){
            include "reportes/grafico-ventas.php";
          }
         ?>
       </div>

       <div class="col-lg-6">
         <?php
          if($_SESSION["perfil"] =="Administrador"){
            include "reportes/productos-mas-vendidos.php";
          }
         ?>
       </div>

        <div class="col-lg-6">
         <?php
          if($_SESSION["perfil"] =="Administrador"){
          include "homepage/productos-recientes.php";
        }
         ?>
       </div>

       <div class="col-lg-12">
        <?php
          if($_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Vendedor"){
           echo '
              <div class="box box-success">
                <div class="box-header">
                  <h1>Bienvenid@ ' .$_SESSION["nombre"].'</h1>
                </div>
              </div>';
          }
        ?>
       </div>

    </div>


  </section>

</div>
