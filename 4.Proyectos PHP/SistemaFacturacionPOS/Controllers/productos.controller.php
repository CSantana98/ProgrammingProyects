<?php

class ControllerProducts{

  /*--==============================
          MOSTRAR PRODUCTOS
  ===================================*/
  static public function ctrMostrarProductos($item, $valor, $orden){

    $tabla = "productos";

    $respuesta = ModelProducts::mdlMostrarProductos($tabla, $item, $valor, $orden);

    return $respuesta;

  }



  /*--==============================
          CREAR PRODUCTO
  ===================================*/
  static public function ctrCrearProducto(){

    if(isset($_POST["nuevaDescripcion"])){
      if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaDescripcion"]) &&
         preg_match('/^[0-9]+$/', $_POST["nuevoStock"]) &&
         preg_match('/^[0-9.]+$/', $_POST["nuevoPrecioCompra"]) &&
         preg_match('/^[0-9.]+$/', $_POST["nuevoPrecioVenta"])){


           /*--==============================
                   VALIDAR IMAGEN PRODUCTO
           ===================================*/
           $ruta = "Views/Images/Products/productodefault.png";

           if(isset($_FILES["nuevaImagen"]["tmp_name"])){
             list($ancho, $alto) = getimagesize($_FILES["nuevaImagen"]["tmp_name"]);
             $nuevoAncho = 500;
             $nuevoAlto = 500;

             /*--==============================
              DIRECTORIO DONDE SE GUARDARA LA FOTO
             ===================================*/
             $directorio = "Views/Images/Products/".$_POST["nuevoCodigo"];
             mkdir($directorio, 0755);

             /*--================================================================
              DE ACUERDO AL TIPO DE IMAGEN APLICO LAS FUNCIONES POR DEFECTO DE PHP
             ====================================================================*/
             if($_FILES["nuevaImagen"]["type"] == "image/jpeg"){

               /*----- Guardo la imagen en el directorio com .jpeg ------*/
               $aleatorio = mt_rand(100,999);
               $ruta = "Views/Images/Products/".$_POST["nuevoCodigo"]."/".$aleatorio.".jpg";
               $origen = imagecreatefromjpeg($_FILES["nuevaImagen"]["tmp_name"]);
               $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

               imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
               imagejpeg($destino, $ruta);

             }

             if($_FILES["nuevaImagen"]["type"] == "image/png"){

               /*----- Guardo la imagen en el directorio como .png------*/
               $aleatorio = mt_rand(100,999);
               $ruta = "Views/Images/Products/".$_POST["nuevoCodigo"]."/".$aleatorio.".png";
               $origen = imagecreatefrompng($_FILES["nuevaImagen"]["tmp_name"]);
               $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

               imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
               imagepng($destino, $ruta);

             }
           }

           $tabla = "productos";
           $datos = array("id_categoria" => $_POST["nuevaCategoria"],
                          "codigo" => $_POST["nuevoCodigo"],
                          "descripcion" => $_POST["nuevaDescripcion"],
                          "stock" => $_POST["nuevoStock"],
                          "precio_compra" => $_POST["nuevoPrecioCompra"],
                          "precio_venta" => $_POST["nuevoPrecioVenta"],
                          "imagen" => $ruta);

           $respuesta = ModelProducts::MdlIngresarProducto($tabla, $datos);

           if($respuesta == "ok"){

             echo '<script>

               Swal.fire({
                 icon: "success",
                 title: "Correcto",
                 text: "!El producto ha sido agregado correctamente!",
                 showConfirmButton: true,
                 confirmButtonText: "Cerrar"
               }).then((result)=>{
                 if(result.value){
                   window.location = "productos";
                 }
               });
             </script>';
           }

         }else {
           echo '<script>

             Swal.fire({
               icon: "error",
               title: "Error",
               text: "!El producto no puede ir con campos vacios o llevar caracteres especiales. Revise nuevamente el producto que desea agregar!",
               showConfirmButton: true,
               confirmButtonText: "Cerrar"
             }).then((result)=>{
               if(result.value){
                 window.location = "productos";
               }
             });
           </script>';
         }
    }
  }



  /*--==============================
          EDITAR PRODUCTO
  ===================================*/
  static public function ctrEditarProducto(){

    if(isset($_POST["editarDescripcion"])){
      if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarDescripcion"]) &&
         preg_match('/^[0-9]+$/', $_POST["editarStock"]) &&
         preg_match('/^[0-9.]+$/', $_POST["editarPrecioCompra"]) &&
         preg_match('/^[0-9.]+$/', $_POST["editarPrecioVenta"])){


           /*--==============================
                   VALIDAR IMAGEN PRODUCTO
           ===================================*/
           $ruta = $_POST["imagenActual"];

           if(isset($_FILES["editarImagen"]["tmp_name"]) && !empty($_FILES["editarImagen"]["tmp_name"])) {

             list($ancho, $alto) = getimagesize($_FILES["editarImagen"]["tmp_name"]);

             $nuevoAncho = 500;
             $nuevoAlto = 500;

             /*--==============================
              DIRECTORIO DONDE SE GUARDARA LA FOTO
             ===================================*/
             $directorio = "Views/Images/Products/".$_POST["editarCodigo"];


             /*=============================================
             PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
             =============================================*/

             if(!empty($_POST["imagenActual"]) && $_POST["imagenActual"] != "Views/Images/Products/productodefault.png"){

               unlink($_POST["imagenActual"]);

             }else{

               mkdir($directorio, 0755);

             }

             /*--================================================================
              DE ACUERDO AL TIPO DE IMAGEN APLICO LAS FUNCIONES POR DEFECTO DE PHP
             ====================================================================*/
             if($_FILES["editarImagen"]["type"] == "image/jpeg"){

               /*----- Guardo la imagen en el directorio com .jpeg ------*/
               $aleatorio = mt_rand(100,999);
               $ruta = "Views/Images/Products/".$_POST["editarCodigo"]."/".$aleatorio.".jpg";
               $origen = imagecreatefromjpeg($_FILES["editarImagen"]["tmp_name"]);
               $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

               imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
               imagejpeg($destino, $ruta);

             }

             if($_FILES["editarImagen"]["type"] == "image/png"){

               /*----- Guardo la imagen en el directorio como .png------*/
               $aleatorio = mt_rand(100,999);
               $ruta = "Views/Images/Products/".$_POST["editarCodigo"]."/".$aleatorio.".png";
               $origen = imagecreatefrompng($_FILES["editarImagen"]["tmp_name"]);
               $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

               imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
               imagepng($destino, $ruta);

             }
           }

           $tabla = "productos";
           $datos = array("id_categoria" => $_POST["editarCategoria"],
                          "codigo" => $_POST["editarCodigo"],
                          "descripcion" => $_POST["editarDescripcion"],
                          "stock" => $_POST["editarStock"],
                          "precio_compra" => $_POST["editarPrecioCompra"],
                          "precio_venta" => $_POST["editarPrecioVenta"],
                          "imagen" => $ruta);

           $respuesta = ModelProducts::mdlEditarProducto($tabla, $datos);

           if($respuesta == "ok"){

             echo '<script>

               Swal.fire({
                 icon: "success",
                 title: "Correcto",
                 text: "!El producto ha sido modificado correctamente!",
                 showConfirmButton: true,
                 confirmButtonText: "Cerrar"
               }).then((result)=>{
                 if(result.value){
                   window.location = "productos";
                 }
               });
             </script>';
           }

         }else {
           echo '<script>

             Swal.fire({
               icon: "error",
               title: "Error",
               text: "!El producto no puede ir con campos vacios o llevar caracteres especiales. Revise nuevamente el producto que desea agregar!",
               showConfirmButton: true,
               confirmButtonText: "Cerrar"
             }).then((result)=>{
               if(result.value){
                 window.location = "productos";
               }
             });
           </script>';
         }
    }
  }



  /*=============================================
  BORRAR PRODUCTO
  =============================================*/
  static public function ctrEliminarProducto(){

    if(isset($_GET["idProducto"])){

      $tabla ="productos";
      $datos = $_GET["idProducto"];

      if($_GET["imagen"] != "" && $_GET["imagen"] != "Views/Images/Products/productodefault.png"){

        unlink($_GET["imagen"]);
        rmdir('Views/Images/Products/'.$_GET["codigo"]);

      }

      $respuesta = ModelProducts::mdlEliminarProducto($tabla, $datos);

      if($respuesta == "ok"){

        echo'<script>

        Swal.fire({
            icon: "success",
            title: "Correcto",
            text: "El producto ha sido eliminado correctamente",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result){
                if (result.value) {

                window.location = "productos";

                }
              })

        </script>';

      }
    }


  }


  /*=============================================
  MOSTRAR SUMA VENTAS
  =============================================*/
  static public function ctrMostrarSumaVentas(){

    $tabla = "productos";

    $respuesta = ModelProducts::mdlMostrarSumaVentas($tabla);

    return $respuesta;

  }

}
