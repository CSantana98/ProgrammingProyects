<!--========================================================================================================
                                MAQUETACION PARA VISTA DE AGREGAR Y EDITAR USUARIOS
============================================================================================================-->

<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Administrar usuarios

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Administrar usuarios</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">

          Agregar usuario

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablas">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Usuario</th>
           <th>Foto</th>
           <th>Perfil</th>
           <th>Estado</th>
           <th>Último login</th>
           <th>Acciones</th>

         </tr>

        </thead>

        <tbody>

          <tr>
            <td>1</td>
            <td>Usuario Administrador</td>
            <td>admin</td>
            <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
            <td>Administrador</td>
            <td><button class="btn btn-success btn-xs">Activado</button></td>
            <td>2017-12-11 12:05:32</td>
            <td>

              <div class="btn-group">

                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>

            </td>

          </tr>

           <tr>
            <td>1</td>
            <td>Usuario Administrador</td>
            <td>admin</td>
            <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
            <td>Administrador</td>
            <td><button class="btn btn-success btn-xs">Activado</button></td>
            <td>2017-12-11 12:05:32</td>
            <td>

              <div class="btn-group">

                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>

            </td>

          </tr>

           <tr>
            <td>1</td>
            <td>Usuario Administrador</td>
            <td>admin</td>
            <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
            <td>Administrador</td>
            <td><button class="btn btn-danger btn-xs">Desactivado</button></td>
            <td>2017-12-11 12:05:32</td>
            <td>

              <div class="btn-group">

                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>

            </td>

          </tr>

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar usuario</h4>

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

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevoPerfil">

                  <option value="">Selecionar perfil</option>

                  <option value="Administrador">Administrador</option>

                  <option value="Especial">Especial</option>

                  <option value="Vendedor">Vendedor</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">

              <div class="panel">SUBIR FOTO</div>

              <input type="file" id="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 200 MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

      </form>

    </div>

  </div>

</div>










<!--========================================================================================================
                                MAQUETACION PARA VISTA DE AGREGAR Y EDITAR CATEGORIAS
============================================================================================================-->

<div class="content-wrapper">

  <section class="content-header">

    <h1>

      <i class="fa fa-th"></i> Administrar Categorias

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>

      <li class="active"><i class="fa fa-th"></i> Administrar Categorias</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">

          <i class="fa fa-th"></i> Agregar Categorias

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablas">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Acciones</th>

         </tr>

        </thead>

        <tbody>

          <tr>
            <td>1</td>
            <td>EQUIPOS ELECTROMECANICOS</td>
            <td>

              <div class="btn-group">

                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>

            </td>

          </tr>

          <tr>
            <td>1</td>
            <td>EQUIPOS ELECTROMECANICOS</td>
            <td>

              <div class="btn-group">

                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>

            </td>

          </tr>

          <tr>
            <td>1</td>
            <td>EQUIPOS ELECTROMECANICOS</td>
            <td>

              <div class="btn-group">

                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>

            </td>

          </tr>

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CATEGORIAS
======================================-->

<div id="modalAgregarCategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title"><i class="fa fa-th"></i> Agregar Categoria</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar Categoria" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Categoria</button>

        </div>

      </form>

    </div>

  </div>

</div>













<!--========================================================================================================
                                MAQUETACION PARA VISTA DE AGREGAR Y EDITAR PRODUCTOS
============================================================================================================-->

<div class="content-wrapper">

  <section class="content-header">

    <h1>

      <i class="fa fa-th"></i> Administrar Productos

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

          <i class="fa fa-product-hunt"></i> Agregar Producto

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablas">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th><i class="fa fa-image"></i> Foto</th>
           <th><i class="fa fa-barcode"></i> Codigo</th>
           <th><i class="fa fa-file-text"></i> Descripcion</th>
           <th><i class="fa fa-th"></i> Categoria</th>
           <th><i class="fa fa-tags"></i> Stock</th>
           <th><i class="fa fa-dolar"></i> Precio de compra</th>
           <th><i class="fa fa-dolar"></i> Precio de venta</th>
           <th><i class="fa fa-cart-plus"></i> Agregado</th>
           <th><i class="fa fa-gears"></i> Acciones</th>

         </tr>

        </thead>

        <tbody>

          <tr>
            <td>1</td>
            <td><img src="Views/Images/Products/productodefault.png" class="img-thumbnail" width="40px"</td>
            <td>0001</td>
            <td>Laptop i7</td>
            <td>Cpmputadoras</td>
            <td>20</td>
            <td>$ 400.00</td>
            <td>$ 500.00</td>
            <td>2020-03-15 7:30:47</td>
            <td>
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              </div>
            </td>
          </tr>

          <tr>
            <td>1</td>
            <td><img src="Views/Images/Products/productodefault.png" class="img-thumbnail" width="40px"</td>
            <td>0001</td>
            <td>Laptop i7</td>
            <td>Cpmputadoras</td>
            <td>20</td>
            <td>$ 400.00</td>
            <td>$ 500.00</td>
            <td>2020-03-15 7:30:47</td>
            <td>
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              </div>
            </td>
          </tr>

          <tr>
            <td>1</td>
            <td><img src="Views/Images/Products/productodefault.png" class="img-thumbnail" width="40px"</td>
            <td>0001</td>
            <td>Laptop i7</td>
            <td>Cpmputadoras</td>
            <td>20</td>
            <td>$ 400.00</td>
            <td>$ 500.00</td>
            <td>2020-03-15 7:30:47</td>
            <td>
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              </div>
            </td>
          </tr>

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CATEGORIAS
======================================-->

<div id="modalAgregarCategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title"><i class="fa fa-th"></i> Agregar Categoria</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar Categoria" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Categoria</button>

        </div>

      </form>

    </div>

  </div>

</div>










<!--========================================================================================================
                                MAQUETACION PARA VISTA DE AGREGAR Y EDITAR CLIENTES
============================================================================================================-->

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

          <i class="fa fa-group"></i> Agregar Cliente

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablas">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th><i class="fa fa-id-card"> Documento ID</th>
           <th><i class="fa fa-envelope"> Email</th>
           <th><i class="fa fa-phone"> Telefono</th>
           <th><i class="fa fa-road"> Direccion</th>
           <th><i class="fa fa-calendar"> Fecha de Nacimiento</th>
           <th><i class="fa fa-shopping-cart"> Total compras</th>
           <th><i class="fa fa-cart-plus"> Ultima compra</th>
           <th><i class="fa fa-refresh"> Ingresado al Sistema</th>
           <th><i class="fa fa-gears "> Acciones</th>

         </tr>

        </thead>

        <tbody>

          <tr>
            <td>1</td>
            <td>Christopher Santana</td>
            <td>402-1393858-8</td>
            <td>Christophers0398@gmail.com</td>
            <td>829-262-7833</td>
            <td>C-4TA #37 Residencial Loyola</td>
            <td>1998-04-03</td>
            <td>20</td>
            <td>2020-03-20</td>
            <td>2018-10-15</td>
            <td>
              <div class="btn-group">

                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>
            </td>

          </tr>

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

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title"><i class="fa fa-th"></i> Agregar Cliente</h4>

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

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar Documento ID" required>

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

                <input type="text" class="form-control input-lg" name="nuevoDireccion" placeholder="Ingresar Direccion" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                <input type="email" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar Fecha de Nacimiento" data-inputmask="'alias':'yyyy/mm/dd'" data-mask required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Cliente</button>

        </div>

      </form>

    </div>

  </div>

</div>










<!--========================================================================================================
                                MAQUETACION PARA VISTA DE ADMINISTRAR VENTAS
============================================================================================================-->

<div class="content-wrapper">

  <section class="content-header">

    <h1>

      <i class="fa fa-group"></i> Administrar Ventas

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>

      <li class="active"><i class="fa fa-group"></i> Administrar Ventas</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary">

          <i class="fa fa-group"></i> Agregar Venta

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablas">

        <thead>
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

          <tr>
            <td>1</td>
            <td>200895</td>
            <td>Christopher Santana</td>
            <td>Juan Gonzales</td>
            <td>TC-846521669581</td>
            <td>$ 1,000.00</td>
            <td>$ 1,190.00</td>
            <td>2020-03-22 11:50:21</td>
            <td>
              <div class="btn-group">

                <button class="btn btn-info"><i class="fa fa-print"></i></button>

                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>

              </div>
            </td>

          </tr>

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>










<!--========================================================================================================
                                MAQUETACION PARA VISTA DE CREAR VENTAS
============================================================================================================-->
<div class="content-wrapper">

  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>
      <li class="active"><i class="fa fa-pie-chart"></i> Crear Ventas</li>
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
                <i class="fa  fa-pie-chart"></i> Crear Venta
              </h1>
            </section>
            <div class="box-header with-border"></div>
              <form role="form" metohd="post">
                  <div class="box-body">
                      <div class="box">
                        <!--=====================================
                        ENTRADA DEL VENDEDOR
                        ======================================-->
                        <div class="form-group">

                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="nuevoVendedor" name="nuevoVendedor" value="Usuario Administrador" readonly>
                          </div>

                        </div>
                        <!--=====================================
                        ENTRADA DEL VENDEDOR
                        ======================================-->
                        <div class="form-group">

                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="10002343" readonly>
                          </div>

                        </div>
                        <!--=====================================
                        ENTRADA DEL CLIENTE
                        ======================================-->
                        <div class="form-group">

                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
                            <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>
                              <option value="">Seleccionar cliente</option>
                            </select>
                            <span class="input-group-addon"><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal"><i class="fa fa-user"></i> Agregar cliente</button></span>
                          </div>

                        </div>
                        <!--=====================================
                        ENTRADA PARA AGREGAR PRODUCTO
                        ======================================-->
                        <div class="form-group row nuevoProducto">

                          <!-- Descripción del producto -->
                            <div class="col-xs-6" style="padding-right:0px">
                              <div class="input-group">
                                <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></span>
                                <input type="text" class="form-control" id="agregarProducto" name="agregarProducto" placeholder="Descripción del producto" required>
                              </div>
                            </div>

                            <!-- Cantidad del producto -->
                            <div class="col-xs-3">
                               <input type="number" class="form-control" id="nuevaCantidadProducto" name="nuevaCantidadProducto" min="1" placeholder="0" required>
                            </div>

                            <!-- Precio del producto -->
                            <div class="col-xs-3" style="padding-left:0px">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                                <input type="number" min="1" class="form-control" id="nuevoPrecioProducto" name="nuevoPrecioProducto" placeholder="000000" readonly required>
                              </div>
                            </div>

                        </div>
                        <!--=====================================
                        BOTÓN PARA AGREGAR PRODUCTO
                        ======================================-->
                        <button type="button" class="btn btn-primary hidden-lg">Agregar producto</button>
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
                                      <input type="number" class="form-control" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" placeholder="0" required>
                                      <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                    </div>
                                  </td>

                                   <td style="width: 50%">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                                      <input type="number" min="1" class="form-control" id="nuevoTotalVenta" name="nuevoTotalVenta" placeholder="00000" readonly required>
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
                               <span class="input-group-addon"><i class="fa fa-money"></i></span>
                              <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago" required>
                                <option value="">Seleccione método de pago</option>
                                <option value="efectivo">Efectivo</option>
                                <option value="tarjetaCredito">Tarjeta Crédito</option>
                                <option value="tarjetaDebito">Tarjeta Débito</option>
                              </select>
                            </div>
                          </div>

                          <div class="col-xs-6" style="padding-left:0px">
                            <div class="input-group">
                              <input type="text" class="form-control" id="nuevoCodigoTransaccion" name="nuevoCodigoTransaccion" placeholder="Código transacción"  required>
                              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            </div>
                          </div>
                        </div>

                        <br>

                      </div>
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Guardar venta</button>
                  </div>

              </form>

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

                <table class="table table-bordered table-striped dt-responsive tablas">
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

                <tbody>
                  <tr>
                    <td>1.</td>
                    <td><img src="Views/Images/Products/productodefault.png" class="img-thumbnail" width="40px"></td>
                    <td>00123</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>20</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i> Agregar</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
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
