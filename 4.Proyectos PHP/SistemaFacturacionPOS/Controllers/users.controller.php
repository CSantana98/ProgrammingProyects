<?php

class ControllerUsers{

  /*--==============================
          INGRESO DE USUARIO
  ===================================*/
   static public function ctrIngresoUser(){
     if(isset($_POST["ingUsuario"])){
       if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
          preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

            $encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            $tabla = "users";
            $item = "usuario";
            $valor = $_POST["ingUsuario"];

            $respuesta = ModelUsers::MdlMostrarusuarios($tabla, $item, $valor);

            if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar){

              if($respuesta["estado"] == 1){

              $_SESSION["IniciarSesion"] = "ok";
              $_SESSION["id"] = $respuesta["id"];
              $_SESSION["nombre"] = $respuesta["nombre"];
              $_SESSION["usuario"] = $respuesta["usuario"];
              $_SESSION["foto"] = $respuesta["foto"];
              $_SESSION["perfil"] = $respuesta["perfil"];

              /*--====================================================================
                  TOMANDO LA FECHA HORA Y ULTIMO LOGON A LA QUE SE INGRESA EL SISTEMA
              =========================================================================*/

              date_default_timezone_set('America/Santo_Domingo');
              $fecha = date('Y-m-d');
              $hora = date('H:i:s');

              $fechaActual = $fecha.' '.$hora;

              $item1 = "ultimo_login";
              $valor1 = $fechaActual;

              $item2 = "id";
              $valor2 = $respuesta["id"];

              $ultimoLogin = ModelUsers::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

              if($ultimoLogin == "ok"){

                echo '<script>

                  Swal.fire({
                    icon: "success",
                    title: "Bienvenido",
                    text: "!Bienvenido al sistema!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                  }).then((result)=>{
                    if(result.value){
                      window.location = "homepage";
                    }
                  });
                </script>';
              }


            }else {
              echo '<script>

                Swal.fire({
                  icon: "error",
                  title: "Error",
                  text: "!Usuario desactivado!",
                  showConfirmButton: true,
                  confirmButtonText: "Cerrar"
                }).then((result)=>{
                  if(result.value){
                    window.location = "ingreso";
                  }
                });
              </script>';
            }

            }else {
              echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
            }

       }

     }
   }


   /*--==============================
           CREAR USUARIOS
   ===================================*/
   static public function ctrCreateUser(){
     if(isset($_POST["nuevoUsuario"])){
       if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
          preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
          preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){

            /*--==============================
                    VALIDAR IMAGEN
            ===================================*/
            $ruta = "";

            if(isset($_FILES["nuevaFoto"]["tmp_name"])){
              list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
              $nuevoAncho = 500;
              $nuevoAlto = 500;

              /*--==============================
               DIRECTORIO DONDE SE GUARDARA LA FOTO
              ===================================*/
              $directorio = "Views/Images/Users/".$_POST["nuevoUsuario"];
              mkdir($directorio, 0755);

              /*--================================================================
               DE ACUERDO AL TIPO DE IMAGEN APLICO LAS FUNCIONES POR DEFECTO DE PHP
              ====================================================================*/
              if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

                /*----- Guardo la imagen en el directorio com .jpeg ------*/
                $aleatorio = mt_rand(100,999);
                $ruta = "Views/Images/Users/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";
                $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);
                $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                imagejpeg($destino, $ruta);

              }

              if($_FILES["nuevaFoto"]["type"] == "image/png"){

                /*----- Guardo la imagen en el directorio como .png------*/
                $aleatorio = mt_rand(100,999);
                $ruta = "Views/Images/Users/".$_POST["nuevoUsuario"]."/".$aleatorio.".png";
                $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);
                $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                imagepng($destino, $ruta);

              }
            }

            $tabla = "users";
            $encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            $datos = array("nombre"=> $_POST["nuevoNombre"],
                           "usuario"=> $_POST["nuevoUsuario"],
                           "password"=> $encriptar,
                           "perfil"=> $_POST["nuevoPerfil"],
                           "foto"=>$ruta);

            $respuesta = ModelUsers::MdlIngresarusuarios($tabla, $datos);

            if($respuesta == "ok"){

              echo '<script>

                Swal.fire({
                  icon: "success",
                  title: "Correcto!",
                  text: "!El usuario ha sido creado correctamente!",
                  showConfirmButton: true,
                  confirmButtonText: "Cerrar"
                }).then((result)=>{
                  if(result.value){
                    window.location = "users";
                  }
                });
              </script>';

            }

          }else {
            echo '<script>

              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "!El nombre no puede ir vacio o llevar caracteres especiales!",
                showConfirmButton: true,
                confirmButtonText: "Cerrar"
              }).then((result)=>{
                if(result.value){
                  window.location = "users";
                }
              });
            </script>';
          }
     }
   }


   /*--==============================
           MOSTRAR USUARIOS
   ===================================*/
   static public function ctrMostrarusuarios($item, $valor){
     $tabla = "users";
     $respuesta = ModelUsers::MdlMostrarusuarios($tabla, $item, $valor);

     return $respuesta;
   }


   /*--==============================
           EDITAR USUARIOS
   ===================================*/
   static public function ctrEditarUsuario(){

     if(isset($_POST["editarUsuario"])){

       if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])){

         /*=============================================
         VALIDAR IMAGEN
         =============================================*/

         $ruta = $_POST["fotoActual"];

         if(isset($_FILES["editarFoto"]["tmp_name"]) && !empty($_FILES["editarFoto"]["tmp_name"])){

           list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);

           $nuevoAncho = 500;
           $nuevoAlto = 500;

           /*=============================================
           CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
           =============================================*/

           $directorio = "Views/Images/Users/".$_POST["editarUsuario"];

           /*=============================================
           PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
           =============================================*/

           if(!empty($_POST["fotoActual"])){

             unlink($_POST["fotoActual"]);

           }else{

             mkdir($directorio, 0755);

           }

           /*=============================================
           DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
           =============================================*/

           if($_FILES["editarFoto"]["type"] == "image/jpeg"){

             /*=============================================
             GUARDAMOS LA IMAGEN EN EL DIRECTORIO
             =============================================*/

             $aleatorio = mt_rand(100,999);

             $ruta = "Views/Images/Users/".$_POST["editarUsuario"]."/".$aleatorio.".jpg";

             $origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);

             $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

             imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

             imagejpeg($destino, $ruta);

           }

           if($_FILES["editarFoto"]["type"] == "image/png"){

             /*=============================================
             GUARDAMOS LA IMAGEN EN EL DIRECTORIO
             =============================================*/

             $aleatorio = mt_rand(100,999);

             $ruta = "Views/Images/Users/".$_POST["editarUsuario"]."/".$aleatorio.".png";

             $origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);

             $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

             imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

             imagepng($destino, $ruta);

           }

         }

         $tabla = "users";

         if($_POST["editarPassword"] != ""){

           if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])){

             $encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

           }else{

             echo'<script>

                 Swal.fire({
                     icon: "error",
                     title: "Error",
                     text: "¡La contraseña no puede ir vacía o llevar caracteres especiales!",
                     showConfirmButton: true,
                     confirmButtonText: "Cerrar"
                     }).then(function(result){
                     if (result.value) {

                     window.location = "users";

                     }
                   })

                 </script>';

           }

         }else{

           $encriptar = $_POST["passwordActual"];

         }

         $datos = array("nombre" => $_POST["editarNombre"],
                        "usuario" => $_POST["editarUsuario"],
                        "password" => $encriptar,
                        "perfil" => $_POST["editarPerfil"],
                        "foto" => $ruta);

         $respuesta = ModelUsers::mdlEditarUsuario($tabla, $datos);

         if($respuesta == "ok"){

           echo'<script>

           Swal.fire({
               icon: "success",
               title: "Correcto",
               text: "El usuario ha sido modificado correctamente",
               showConfirmButton: true,
               confirmButtonText: "Cerrar"
               }).then(function(result){
                   if (result.value) {

                   window.location = "users";

                   }
                 })

           </script>';

         }


       }else{

         echo'<script>

           Swal.fire({
               icon: "error",
               title: "Error",
               text: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
               showConfirmButton: true,
               confirmButtonText: "Cerrar"
               }).then(function(result){
               if (result.value) {

               window.location = "users";

               }
             })

           </script>';

       }

     }

   }


   /*--==============================
            BORRAR USUARIOS
   ===================================*/
   static public function ctrBorrarUsuario(){

     if(isset($_GET["idUsuario"])){

       $tabla ="users";
       $datos = $_GET["idUsuario"];

       if($_GET["fotoUsuario"] != ""){
         unlink($_GET["fotoUsuario"]);
         rmdir('Views/Images/Users/'.$_GET["usuario"]);
       }
       $respuesta = ModelUsers::mdlBorrarUsuario($tabla, $datos);

       if($respuesta == "ok"){

         echo'<script>

         Swal.fire({
             icon: "success",
             title: "Correcto",
             text: "El usuario ha sido eliminado correctamente",
             showConfirmButton: true,
             confirmButtonText: "Cerrar"
             }).then(function(result){
                 if (result.value) {

                 window.location = "users";

                 }
               })

         </script>';

       }
     }

   }

}
