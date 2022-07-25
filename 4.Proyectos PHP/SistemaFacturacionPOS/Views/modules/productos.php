<?php

if($_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "homepage";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">

    <h1>

      <i class="fa fa-product-hunt"></i> Administrar Productos

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>

      <li class="active"><i class="fa fa-product-hunt"></i> Administrar Productos</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">

          <i class="fa fa-plus-square"></i> Agregar Producto

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">

        <thead>
         <tr>
           <th style="width:10px">#</th>
           <th><i class="fa fa-image"></i> Foto</th>
           <th><i class="fa fa-code"></i> Codigo</th>
           <th style="width:400px"><i class="fa fa-file-text"></i> Descripcion</th>
           <th><i class="fa fa-th"></i> Categoria</th>
           <th><i class="fa fa-tags"></i> Stock</th>
           <th><i class="fa fa-dollar"></i> Precio de compra</th>
           <th><i class="fa fa-dollar"></i> Precio de venta</th>
           <th><i class="fa fa-cart-plus"></i> Agregado</th>
           <th><i class="fa fa-gears"></i> Acciones</th>
         </tr>
        </thead>

        <tfoot>
          <tr>
            <th style="width:10px">#</th>
            <th><i class="fa fa-image"></i> Foto</th>
            <th><i class="fa fa-code"></i> Codigo</th>
            <th style="width:400px"><i class="fa fa-file-text"></i> Descripcion</th>
            <th><i class="fa fa-th"></i> Categoria</th>
            <th><i class="fa fa-tags"></i> Stock</th>
            <th><i class="fa fa-dollar"></i> Precio de compra</th>
            <th><i class="fa fa-dollar"></i> Precio de venta</th>
            <th><i class="fa fa-cart-plus"></i> Agregado</th>
            <th><i class="fa fa-gears"></i> Acciones</th>
          </tr>
      </tfoot>

       </table>

       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CATEGORIAS
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <h4 class="modal-title"><i class="fa fa-plus-square"></i> Agregar Producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA SELECCIONAR LA CATEGORIA A LA QUE PERTENECE -->
            <div class="box-body">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <select class="form-control input-lg" id="nuevaCategoria" name="nuevaCategoria" required>
                    <option value="">SELECCIONAR CATEGORIA</option>

                    <?php
                      $item = null;
                      $valor = null;
                      $categorias = ControllerCategories::ctrMostrarCategorias($item, $valor);

                      foreach ($categorias as $key => $value) {
                        echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                      }
                    ?>

                  </select>
                </div>
              </div>
            </div>

            <!-- ENTRADA PARA EL CODIGO -->
            <div class="box-body">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                  <input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar Codigo" readonly required>
                </div>
              </div>
            </div>

            <!-- ENTRADA PARA LA DESCRIPCION -->
            <div class="box-body">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar Descripcion" required>
                </div>
              </div>
            </div>


            <!-- ENTRADA PARA EL STOCK -->
            <div class="box-body">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-tags"></i></span>
                  <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Ingresar Stock" required>
                </div>
              </div>
            </div>

            <!-- ENTRADA PARA EL PRECIO COMPRA -->
            <div class="box-body">
              <div class="form-group row">
                <div class="col-xs-12 col-sm-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="number" class="form-control input-lg" id="nuevoPrecioCompra" name="nuevoPrecioCompra" min="0" step="any" placeholder="Ingresar Precio de Compra" required>
                    </div>
                </div>

            <!-- ENTRADA PARA EL PRECIO VENTA -->
                <div class="col-xs-12 col-sm-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="number" class="form-control input-lg" id="nuevoPrecioVenta" name="nuevoPrecioVenta" min="0" step="any" placeholder="Ingresar Precio de Venta" required>
                    </div>
                    <br>
                    <!-- CHECKBOX PARA PORCENTAJE -->
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>
                          <input type="checkbox" class="minimal porcentaje" checked>
                          Utilizar porcentaje
                        </label>
                      </div>
                    </div>
                    <!-- ENTRADA PARA EL PORCENTAJE -->
                    <div class="col-xs-6" style="padding:0">
                      <div class="input-group">
                        <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                      </div>
                    </div>
                </div>

              </div>
            </div>

            <!-- CAMPO PARA LA IMAGEN -->
            <div class="box-body">
                <div class="form-group">
                  <div class="panel text">SUBIR IMAGEN DEL PRODUCTO</div>
                  <input type="file" class="nuevaImagen" name="nuevaImagen">
                  <p class="help-block">Peso maximo de la foto 2MB</p>
                  <img src="Views/Images/Products/productodefault.png" class="img-thumbnail previsualizar" width="100px">
                </div>
              </div>


            </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>

          <button type="submit" class="btn btn-primary">Guardar Producto</button>

        </div>

      </form>
      <?php
          $crearProducto = new ControllerProducts();
          $crearProducto -> ctrCrearProducto();
      ?>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->

<div id="modalEditarProducto" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <h4 class="modal-title"><i class="fa fa-pencil"></i> Editar Producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA SELECCIONAR LA CATEGORIA A LA QUE PERTENECE -->
            <div class="box-body">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <select class="form-control input-lg" name="editarCategoria" readonly required>
                    <option id="editarCategoria"></option>

                  </select>
                </div>
              </div>
            </div>

            <!-- ENTRADA PARA EL CODIGO -->
            <div class="box-body">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                  <input type="text" class="form-control input-lg" id="editarCodigo" name="editarCodigo" readonly required>
                </div>
              </div>
            </div>

            <!-- ENTRADA PARA LA DESCRIPCION -->
            <div class="box-body">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                  <input type="text" class="form-control input-lg" id="editarDescripcion" name="editarDescripcion" required>
                </div>
              </div>
            </div>


            <!-- ENTRADA PARA EL STOCK -->
            <div class="box-body">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-tags"></i></span>
                  <input type="number" class="form-control input-lg" id="editarStock" name="editarStock" min="0" required>
                </div>
              </div>
            </div>

            <!-- ENTRADA PARA EL PRECIO COMPRA -->
            <div class="box-body">
              <div class="form-group row">
                <div class="col-xs-12 col-sm-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="number" class="form-control input-lg" id="editarPrecioCompra" name="editarPrecioCompra" min="0" step="any" required>
                    </div>
                </div>

            <!-- ENTRADA PARA EL PRECIO VENTA -->
                <div class="col-xs-12 col-sm-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                      <input type="number" class="form-control input-lg" id="editarPrecioVenta" name="editarPrecioVenta" min="0" step="any" readonly required>
                    </div>
                    <br>
                    <!-- CHECKBOX PARA PORCENTAJE -->
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>
                          <input type="checkbox" class="minimal porcentaje" checked>
                          Utilizar porcentaje
                        </label>
                      </div>
                    </div>
                    <!-- ENTRADA PARA EL PORCENTAJE -->
                    <div class="col-xs-6" style="padding:0">
                      <div class="input-group">
                        <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                      </div>
                    </div>
                </div>

              </div>
            </div>

            <!-- CAMPO PARA LA IMAGEN -->
            <div class="box-body">
                <div class="form-group">
                  <div class="panel text">SUBIR IMAGEN DEL PRODUCTO</div>
                  <input type="file" class="nuevaImagen" name="editarImagen">
                  <p class="help-block">Peso maximo de la foto 2MB</p>
                  <img src="Views/Images/Products/productodefault.png" class="img-thumbnail previsualizar" width="100px">
                  <input type="hidden" name="imagenActual" id="imagenActual">
                </div>
              </div>


            </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>

          <button type="submit" class="btn btn-primary">Modificar Producto</button>

        </div>

      </form>
        <?php
        $editarProducto = new ControllerProducts();
        $editarProducto -> ctrEditarProducto();
        ?>

    </div>

  </div>

</div>

      <?php
      $eliminarProducto = new ControllerProducts();
      $eliminarProducto -> ctrEliminarProducto();
      ?>
