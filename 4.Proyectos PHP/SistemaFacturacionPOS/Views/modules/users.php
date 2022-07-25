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
    <h1><i class="fa fa-users"></i>
      Administrar Usuarios
    </h1>
    <ol class="breadcrumb">
      <li><a href="homepage"><i class="fa fa-home"></i> Inicio</a></li>
      <li class="active"><i class="fa fa-users"></i> Administrar Usuarios</li>
    </ol>
  </section>

  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-agregarusuario">
          <i class="fa fa-user-plus"></i> Agregar Usuario</button>
      </div>

      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

          <thead>
            <tr>
              <th style="width:10px">#</th>
              <th><i class="fa fa-user"></i> Nombre</th>
              <th><i class="fa fa-user"></i> Usuario</th>
              <th><i class="fa fa-image"></i> Foto</th>
              <th><i class="fa fa-list-ol"></i> Perfil</th>
              <th><i class="fa fa-check-square"></i> Estado</th>
              <th><i class="fa fa-refresh"></i> Ultimo Login</th>
              <th><i class="fa fa-gears"></i> Acciones</th>
            </tr>
          </thead>

          <tfoot>
            <tr>
              <th style="width:10px">#</th>
              <th><i class="fa fa-user"></i> Nombre</th>
              <th><i class="fa fa-user"></i> Usuario</th>
              <th><i class="fa fa-image"></i> Foto</th>
              <th><i class="fa fa-list-ol"></i> Perfil</th>
              <th><i class="fa fa-check-square"></i> Estado</th>
              <th><i class="fa fa-refresh"></i> Ultimo Login</th>
              <th><i class="fa fa-gears"></i> Acciones</th>
            </tr>
          </tfoot>

          <tbody>

            <?php
            $item = null;
            $valor = null;
            $usuarios = ControllerUsers::ctrMostrarusuarios($item, $valor);

            foreach ($usuarios as $key => $value) {
              echo '<tr>
                <td>'.($key+1).'</td>
                <td>'.$value["nombre"].'</td>
                <td>'.$value["usuario"].'</td>';

                if($value["foto"] != ""){
                  echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';
                }else {
                  echo '<td><img src="Views/Images/Users/usersdefault.png" class="img-thumbnail" width="40px"></td>';
                }

                echo '<td>'.$value["perfil"].'</td>';

                if($value["estado"] != 0){
                  echo '<td><button class="btn btn-success btn-xs  btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';
                }else {
                  echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';
                }

                echo '<td>'.$value["ultimo_login"].'</td>
                <td>

                  <div class="btn-group">
                    <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fa fa-trash"></i></button>
                  </div>
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

<!--==============================
     VENTANA MODAL- ADDUSUARIO
===================================-->
<div class="modal fade" id="modal-agregarusuario">
<div class="modal-dialog">
  <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">
      <!--==============================
           CABEZA DEL MODAL
      ===================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-user-plus"></i> Agregar Usuario</h4>
      </div>
      <!--==============================
          CUERPO DEL MODAL
      ===================================-->
      <div class="modal-body">

        <!-- CAMPO PARA EL NOMBRE -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre" required>
            </div>
          </div>
        </div>
        <!-- CAMPO PARA EL USUARIO -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" id="nuevoUsuario" name="nuevoUsuario" placeholder="Ingresar Usuario" required>
            </div>
          </div>
        </div>
        <!-- CAMPO PARA CONTRASENA -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar Contraseña" required>
            </div>
          </div>
        </div>
        <!-- CAMPO PARA EL PERFIL -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-users"></i></span>
              <select class="form-control input-lg" name="nuevoPerfil">
                <option value="">Seleccionar Perfil</option>
                <option value="Administrador">Administrador</option>
                <option value="Especial">Especial</option>
                <option value="Vendedor">Vendedor</option>
              </select>
            </div>
          </div>
        </div>
        <!-- CAMPO PARA LA FOTO -->
          <div class="form-group">
            <div class="panel text">SUBIR FOTO</div>
            <input type="file" class="nuevaFoto" name="nuevaFoto">
            <p class="help-block">Peso maximo de la foto 2MB</p>
            <img src="Views/Images/Users/usersdefault.png" class="img-thumbnail previsualizar2" width="100px">
          </div>
        </div>
        <!--==============================
             PIE DEL MODAL
        ===================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar Usuario</button>
        </div>

        <?php
        $createUser = new ControllerUsers();
        $createUser -> ctrCreateUser();
        ?>

    </form>

    </div>
  </div>
</div>

<!--==============================
    VENTANA MODAL- EDITAR USUARIO
===================================-->

<div class="modal fade" id="modalEditarUsuario">
<div class="modal-dialog">
  <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">
      <!--==============================
           CABEZA DEL MODAL
      ===================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-pencil"></i> Editar Usuario</h4>
      </div>
      <!--==============================
          CUERPO DEL MODAL
      ===================================-->
      <div class="modal-body">

        <!-- CAMPO PARA EL NOMBRE -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" required>
            </div>
          </div>
        </div>
        <!-- CAMPO PARA EL USUARIO -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="" readonly>
            </div>
          </div>
        </div>
        <!-- CAMPO PARA CONTRASENA -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">
              <input type="hidden" id="passwordActual" name="passwordActual"></div>
          </div>
        </div>
        <!-- CAMPO PARA EL PERFIL -->
        <div class="box-body">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-users"></i></span>
              <select class="form-control input-lg" name="editarPerfil">
                <option value="" id="editarPerfil"></option>
                <option value="Administrador">Administrador</option>
                <option value="Especial">Especial</option>
                <option value="Vendedor">Vendedor</option>
              </select>
            </div>
          </div>
        </div>
        <!-- CAMPO PARA LA FOTO -->
          <div class="form-group">
            <div class="panel text">SUBIR FOTO</div>
            <input type="file" class="nuevaFoto" name="editarFoto">
            <p class="help-block">Peso maximo de la foto 2MB</p>
            <img src="Views/Images/Users/usersdefault.png" class="img-thumbnail previsualizar" width="100px">
            <input type="hidden" name="fotoActual" id="fotoActual">
          </div>
        </div>
        <!--==============================
             PIE DEL MODAL
        ===================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Modificar usuario</button>
        </div>

        <?php
        $editarUsuario = new ControllerUsers();
        $editarUsuario -> ctrEditarUsuario();
        ?>

    </form>

    </div>
  </div>
</div>

        <?php
        $borrarUsuario = new ControllerUsers();
        $borrarUsuario -> ctrBorrarUsuario();
        ?>
