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

      <i class="fa fa-group"></i> Administrar Clientes

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>

      <li class="active"><i class="fa fa-group"></i> Administrar Clientes</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">

          <i class="fa fa-plus-square"></i> Agregar Cliente

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablas">

        <thead>
         <tr>
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th style="width:110px"><i class="fa fa-id-card"></i> Documento ID</th>
           <th><i class="fa fa-envelope"></i> Email</th>
           <th style="width:75px"><i class="fa fa-phone"></i> Telefono</th>
           <th style="width:85px"><i class="fa fa-road"></i> Direccion</th>
           <th><i class="fa fa-calendar"></i> Fecha de Nacimiento</th>
           <th><i class="fa fa-shopping-cart"></i> Total compras</th>
           <th><i class="fa fa-cart-plus"></i> Ultima compra</th>
           <th><i class="fa fa-refresh"></i> Ingresado al Sistema</th>
           <th><i class="fa fa-gears "></i> Acciones</th>
         </tr>
        </thead>

        <tfoot>
         <tr>
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th style="width:110px"><i class="fa fa-id-card"></i> Documento ID</th>
           <th><i class="fa fa-envelope"></i> Email</th>
           <th style="width:75px"><i class="fa fa-phone"></i> Telefono</th>
           <th style="width:85px"><i class="fa fa-road"></i> Direccion</th>
           <th><i class="fa fa-calendar"></i> Fecha de Nacimiento</th>
           <th><i class="fa fa-shopping-cart"></i> Total compras</th>
           <th><i class="fa fa-cart-plus"></i> Ultima compra</th>
           <th><i class="fa fa-refresh"></i> Ingresado al Sistema</th>
           <th><i class="fa fa-gears "></i> Acciones</th>
         </tr>
       </tfoot>

        <tbody>

          <?php

                    $item = null;
                    $valor = null;
                    $clientes = ControllerClientes::ctrMostrarClientes($item, $valor);
                    foreach ($clientes as $key => $value) {
                      echo '
                          <tr>
                            <td>'.($key+1).'</td>
                            <td>'.$value["nombre"].'</td>
                            <td>'.$value["documento"].'</td>
                            <td>'.$value["email"].'</td>
                            <td>'.$value["telefono"].'</td>
                            <td>'.$value["direccion"].'</td>
                            <td>'.$value["fecha_nacimiento"].'</td>
                            <td>'.$value["compras"].'</td>
                            <td>'.$value["ultima_compra"].'</td>
                            <td>'.$value["fecha_ingresado"].'</td>
                            <td>
                              <div class="btn-group">
                                <button class="btn btn-warning btnEditarClientes"   idCliente="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCliente"><i class="fa fa-pencil"></i></button>';

                                if($_SESSION["perfil"] == "Administrador"){
                                  echo'<button class="btn btn-danger  btnEliminarClientes" idCliente="'.$value["id"].'"><i class="fa fa-trash"></i></button>';
                                }
                          echo'</div>
                            </td>
                          </tr>';
                    }
            ?>

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CLIENTES
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <h4 class="modal-title"><i class="fa fa-plus-square"></i> Agregar Cliente</h4>

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



<!--=====================================
MODAL EDITAR CLIENTE
======================================-->

<div id="modalEditarCliente" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <h4 class="modal-title"><i class="fa fa-pencil"></i> Editar Cliente</h4>

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

                <input type="text" class="form-control input-lg" id="editarCliente" name="editarCliente" required>
                <input type="hidden" name="idCliente" id="idCliente" required>
              </div>

            </div>

            <!-- ENTRADA PARA EL DOCUMENTO ID -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-id-card"></i></span>

                <input type="text" class="form-control input-lg" id="editarDocumentoId" name="editarDocumentoId" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                <input type="email" class="form-control input-lg" id="editarEmail" name="editarEmail" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                <input type="text" class="form-control input-lg" id="editarTelefono" id="editarTelefono" name="editarTelefono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCION -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-road"></i></span>

                <input type="text" class="form-control input-lg" id="editarDireccion" name="editarDireccion" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                <input type="text" class="form-control input-lg" id="editarFechaNacimiento" name="editarFechaNacimiento" data-inputmask="'alias':'yyyy/mm/dd'" data-mask required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>

          <button type="submit" class="btn btn-primary">Modificar Cliente</button>

        </div>

      </form>

      <?php
      $editarCliente = new ControllerClientes();
      $editarCliente -> ctrEditarCliente();
      ?>

    </div>

  </div>

</div>

    <?php
    $eliminarCliente = new ControllerClientes();
    $eliminarCliente -> ctrEliminarCliente();
    ?>
