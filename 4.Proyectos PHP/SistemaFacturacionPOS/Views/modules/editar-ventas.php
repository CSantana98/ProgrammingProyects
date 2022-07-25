<?php

if($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "homepage";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>
      <li class="active"><i class="fa fa-pie-chart"></i> Editar Ventas</li>
    </ol>
  </section>
  <br>

  <section class="content">

    <div class="row">

        <!--====================
                  FORMULARIO
        ========================-->
        <div class="col-lg-5 col-xs-12">
          <div class="box box-success">
            <section class="content-header">
              <h1>
                <i class="fa  fa-pie-chart"></i> Editar Venta
              </h1>
            </section>
            <div class="box-header with-border"></div>
              <form role="form" method="post" class="formularioVenta">
                  <div class="box-body">
                      <div class="box">

                        <?php
                        $item = "id";
                        $valor = $_GET["idVenta"];
                        $venta = ControllerVentas::ctrMostrarVentas($item, $valor);

                        $itemUsuario = "id";
                        $valorUsuario = $venta["id_vendedor"];

                        $vendedor = ControllerUsers::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                        $itemCliente = "id";
                        $valorCliente = $venta["id_cliente"];

                        $cliente = ControllerClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                        $porcentajeImpuesto = $venta["impuesto"] * 100 / $venta["neto"];

                        ?>

                        <!--=====================================
                        ENTRADA DEL VENDEDOR
                        ======================================-->
                        <div class="form-group">

                          <div class="input-group">
                            <span class="input-group-addon"><b>Nombre del Vendedor</b> <i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="nuevoVendedor" value="<?php echo $vendedor["nombre"]; ?>" readonly>
                            <input type="hidden" name="idVendedor" value="<?php echo $vendedor["id"]; ?>">
                          </div>

                        </div>
                        <!--=====================================
                        ENTRADA PARA EL CODIGO
                        ======================================-->
                        <div class="form-group">

                          <div class="input-group">
                            <span class="input-group-addon"><b>Codigo de Factura</b> <i class="fa fa-file-code-o"></i></span>
                            <input type="text" class="form-control" id="nuevaVenta" name="editarVenta" value="<?php echo $venta["codigo"]; ?>" readonly>
                          </div>

                        </div>
                        <!--=====================================
                        ENTRADA DEL CLIENTE
                        ======================================-->
                        <div class="form-group">

                          <div class="input-group">
                            <span class="input-group-addon"><b>Nombre del Cliente</b> <i class="fa fa-users"></i></span>
                            <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>
                              <option value="<?php echo $cliente["id"]; ?>"><?php echo $cliente["nombre"]; ?></option>

                              <?php
                              $item = null;
                              $valor = null;

                              $categorias = ControllerClientes::ctrMostrarClientes($item, $valor);

                              foreach ($categorias as $key => $value) {
                                echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                                }
                              ?>

                            </select>
                            <span class="input-group-addon"><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal"><i class="fa fa-user"></i> Agregar cliente</button></span>
                          </div>

                        </div>
                        <!--=====================================
                        ENTRADA PARA AGREGAR PRODUCTO
                        ======================================-->
                        <div class="form-group row nuevoProducto">

                          <?php

                              $listaProducto = json_decode($venta["productos"], true);

                              foreach ($listaProducto as $key => $value) {

                              $item = "id";
                              $valor = $value["id"];
                              $orden = "id";

                              $respuesta = ControllerProducts::ctrMostrarProductos($item, $valor, $orden);

                              $stockAntiguo = $respuesta["stock"] + $value["cantidad"];

                              echo
                              '<div class="row" style="padding:5px 15px">

                                  <div class="col-xs-6" style="padding-right:0px">
                                    <div class="input-group">
                                      <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarProducto" idProducto="'.$value["id"].'"><i class="fa fa-times"></i></button></span>
                                      <input type="text" class="form-control nuevaDescripcionProducto" idProducto="'.$value["id"].'" name="agregarProducto" value="'.$value["descripcion"].'" readonly required>
                                    </div>
                                  </div>

                                  <div class="col-xs-3">
                                    <input type="number" class="form-control nuevaCantidadProducto" name="nuevaCantidadProducto" min="1" value="'.$value["cantidad"].'" stock="'.$stockAntiguo.'" nuevoStock="'.$value["stock"].'" required>
                                  </div>

                                  <div class="col-xs-3 ingresoPrecio" style="padding-left:0px">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                                      <input type="text" class="form-control nuevoPrecioProducto" precioReal="'.$respuesta["precio_venta"].'" name="nuevoPrecioProducto" value="'.$value["total"].'" readonly required>
                                    </div>
                                  </div>

                              </div>';
                              }

                            ?>

                        </div>

                        <input type="hidden" id="listaProductos" name="listaProductos">

                        <!--=====================================
                        BOTÓN PARA AGREGAR PRODUCTO
                        ======================================-->
                        <button type="button" class="btn btn-primary hidden-lg btnAgregarProducto">Agregar producto</button>
                        <hr>

                        <div class="row">

                          <!--=====================================
                          ENTRADA IMPUESTOS Y TOTAL
                          ======================================-->
                          <div class="col-xs-8 pull-right">

                            <table class="table">

                              <thead>
                                <tr>
                                  <th>Impuesto</th>
                                  <th>Total</th>
                                </tr>
                              </thead>

                              <tbody>

                                <tr>

                                  <td style="width: 50%">
                                    <div class="input-group">
                                      <input type="number" class="form-control input-lg" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" value="<?php echo $porcentajeImpuesto; ?>" required>
                                      <input type="hidden" name="nuevoPrecioImpuesto" id="nuevoPrecioImpuesto" value="<?php echo $venta["impuesto"]; ?>" required>
                                      <input type="hidden" name="nuevoPrecioNeto" id="nuevoPrecioNeto" value="<?php echo $venta["neto"]; ?>" required>
                                      <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                    </div>
                                  </td>

                                   <td style="width: 50%">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                                      <input type="text" class="form-control input-lg" id="nuevoTotalVenta" name="nuevoTotalVenta" total="<?php echo $venta["neto"]; ?>" value="<?php echo $venta["total"]; ?>" readonly required>
                                      <input type="hidden" name="totalVenta" value="<?php echo $venta["total"]; ?>" id="totalVenta">
                                    </div>
                                  </td>

                                </tr>

                              </tbody>

                            </table>

                          </div>

                        </div>
                        <hr>

                        <!--=====================================
                        ENTRADA MÉTODO DE PAGO
                        ======================================-->
                        <div class="form-group row">
                          <div class="col-xs-6" style="padding-right:50px">
                             <div class="input-group">
                              <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago" required>
                                <option value="">Seleccione método de pago</option>
                                <option value="Efectivo">Efectivo</option>
                                <option value="TC">Tarjeta Crédito</option>
                                <option value="TD">Tarjeta Débito</option>
                              </select>
                            </div>
                          </div>

                            <div class="cajasMetodoPago"></div>
                            <input type="hidden" id="listaMetodoPago" name="listaMetodoPago">

                        </div>

                        <br>

                      </div>
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Guardar Cambios</button>
                  </div>

              </form>

              <?php
              $editarVenta = new ControllerVentas();
              $editarVenta -> ctrEditarVenta();
              ?>

        </div>
      </div>

        <!--====================
              TABLA PRODUCTOS
        ========================-->
        <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
          <div class="box box-warning">
            <section class="content-header">
              <h1>
                <i class="fa fa-product-hunt"></i> Tabla de Productos
              </h1>
            </section>
            <div class="box-header with-border"></div>
              <div class="box-body">

                <table class="table table-bordered table-striped dt-responsive tablaVentas">
                 <thead>
                   <tr>
                    <th style="width: 10px">#</th>
                    <th><i class="fa fa-image"></i> Foto</th>
                    <th><i class="fa fa-code"></i> Código</th>
                    <th><i class="fa fa-file-text"></i> Descripcion</th>
                    <th><i class="fa fa-tags"></i> Stock</th>
                    <th><i class="fa fa-gears"></i> Acciones</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                   <th style="width: 10px">#</th>
                   <th><i class="fa fa-image"></i> Foto</th>
                   <th><i class="fa fa-code"></i> Código</th>
                   <th><i class="fa fa-file-text"></i> Descripcion</th>
                   <th><i class="fa fa-tags"></i> Stock</th>
                   <th><i class="fa fa-gears"></i> Acciones</th>
                 </tr>
               </tfoot>
              </table>

            </div>
          </div>

    </div>


  </section>

</div>







<div id="modalAgregarCliente" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <h4 class="modal-title"><i class="fa fa-group"></i> Agregar Cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar Nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DOCUMENTO ID -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-id-card"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar Documento ID" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar Email" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar Telefono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCION -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-road"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar Direccion" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar Fecha de Nacimiento" data-inputmask="'alias':'yyyy/mm/dd'" data-mask required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>

          <button type="submit" class="btn btn-primary">Guardar Cliente</button>

        </div>

      </form>

      <?php
      $crearCliente = new ControllerClientes();
      $crearCliente -> ctrCrearCliente();
      ?>

    </div>

  </div>

</div>
