<?php

if($_SESSION["perfil"] == "Especial"){

  echo '<script>

    window.location = "homepage";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">

    <h1>

      <i class="fa fa-bar-chart"></i> Administrar Ventas

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>

      <li class="active"><i class="fa fa-bar-chart"></i> Administrar Ventas</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

      <a href="crear-ventas">
        <button class="btn btn-primary">
          <i class="fa fa-plus-square"></i> Agregar Venta
        </button>
      </a>

      <button type="button" class="btn btn-info pull-right" id="daterange-btn">
         <span>
           <i class="fa fa-calendar"></i> Rango de fecha
         </span>

         <i class="fa fa-caret-down"></i>
      </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablas">

        <thead>
         <tr>
           <th style="width:10px">#</th>
           <th><i class="fa fa-file-code-o"></i> Codigo Factura</th>
           <th><i class="fa fa-user"></i> Cliente</th>
           <th><i class="fa fa-user"></i> Vendedor</th>
           <th><i class="fa fa-dollar"></i> <i class="fa fa-credit-card"></i> Forma de Pago</th>
           <th><i class="fa fa-dollar"></i> Neto</th>
           <th><i class="fa fa-dollar"></i> Total</th>
           <th><i class="fa fa-calendar"></i> Fecha de Transaccion</th>
           <th><i class="fa fa-gears "></i> Acciones</th>
         </tr>
        </thead>

        <tfoot>
         <tr>
           <th style="width:10px">#</th>
           <th><i class="fa fa-code"></i> Codigo Factura</th>
           <th><i class="fa fa-user"></i> Cliente</th>
           <th><i class="fa fa-user"></i> Vendedor</th>
           <th><i class="fa fa-dollar"></i> <i class="fa fa-credit-card"></i> Forma de Pago</th>
           <th><i class="fa fa-dollar"></i> Neto</th>
           <th><i class="fa fa-dollar"></i> Total</th>
           <th><i class="fa fa-calendar"></i> Fecha de Transaccion</th>
           <th><i class="fa fa-gears "></i> Acciones</th>
         </tr>
       </tfoot>

        <tbody>

          <?php

            if(isset($_GET["fechaInicial"])){
              $fechaInicial = $_GET["fechaInicial"];
              $fechaFinal = $_GET["fechaFinal"];

            }else{
              $fechaInicial = null;
              $fechaFinal = null;
            }

            $respuesta = ControllerVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);

            foreach ($respuesta as $key => $value) {
              echo '<tr>
                      <td>'.($key+1).'</td>
                      <td>'.$value["codigo"].'</td>';

                      $itemCliente = "id";
                      $valorCliente = $value["id_cliente"];

                      $respuestaCliente = ControllerClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                      echo '<td>'.$respuestaCliente["nombre"].'</td>';

                      $itemUsuario = "id";
                      $valorUsuario = $value["id_vendedor"];

                      $respuestaUsuario = ControllerUsers::ctrMostrarusuarios($itemUsuario, $valorUsuario);

                      echo '<td>'.$respuestaUsuario["nombre"].'</td>
                      <td>'.$value["metodo_pago"].'</td>
                      <td>$ '.number_format($value["neto"],2).'</td>
                      <td>$ '.number_format($value["total"],2).'</td>
                      <td>'.$value["fecha"].'</td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-info btnImprimirFactura" codigoVenta="'.$value["codigo"].'"><i class="fa fa-print"></i></button>';

                          if($_SESSION["perfil"] == "Administrador"){
                          echo'<button class="btn btn-warning btnEditarVenta" idVenta="'.$value["id"].'"><i class="fa fa-pencil"></i></button>
                               <button class="btn btn-danger btnEliminarVenta" idVenta="'.$value["id"].'"><i class="fa fa-trash"></i></button>';
                          }
                        echo'
                        </div>
                      </td>
                    </tr>';
            }
          ?>

        </tbody>

       </table>

       <?php

      $eliminarVenta = new ControllerVentas();
      $eliminarVenta -> ctrEliminarVenta();

      ?>

      </div>

    </div>

  </section>

</div>
