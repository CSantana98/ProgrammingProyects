<?php

  class ControllerCategories{

    /*--==============================
            CREAR CATEGORIA
    ===================================*/

    static public function ctrCreateCategorie(){

      if(isset($_POST["nuevaCategoria"])){

        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCategoria"])){

          $tabla = "categorias";
          $datos = $_POST["nuevaCategoria"];
          $respuesta = ModelCategories::mdlCreateCategorie($tabla, $datos);

          if($respuesta == "ok"){

            echo '<script>

              Swal.fire({
                icon: "success",
                title: "Correcto!",
                text: "!La categoria ha sido creada correctamente!",
                showConfirmButton: true,
                confirmButtonText: "Cerrar"
              }).then((result)=>{
                if(result.value){
                  window.location = "categories";
                }
              });
            </script>';
          }

        }else {

          echo '<script>

            Swal.fire({
              icon: "error",
              title: "Error",
              text: "!La categoria no puede ir vacia o llevar caracteres especiales!",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
            }).then((result)=>{
              if(result.value){
                window.location = "categories";
              }
            });
          </script>';

        }
      }
    }


    /*--==============================
            MOSTRAR CATEGORIAS
    ===================================*/

    static public function ctrMostrarCategorias($item, $valor){

  		$tabla = "categorias";

  		$respuesta = ModelCategories::mdlMostrarCategorias($tabla, $item, $valor);

  		return $respuesta;

  	}

    /*=============================================
    EDITAR CATEGORIA
    =============================================*/

    static public function ctrEditarCategoria(){

      if(isset($_POST["editarCategoria"])){

        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCategoria"])){

          $tabla = "categorias";

          $datos = array("categoria"=>$_POST["editarCategoria"],
                   "id"=>$_POST["idCategoria"]);

          $respuesta = ModelCategories::mdlEditarCategoria($tabla, $datos);

          if($respuesta == "ok"){

            echo'<script>

            Swal.fire({
                icon: "success",
                title: "Correcto!",
                text: "La categoría ha sido modificada correctamente",
                showConfirmButton: true,
                confirmButtonText: "Cerrar"
                }).then(function(result){
                    if (result.value) {

                    window.location = "categories";

                    }
                  })

            </script>';

          }


        }else{

          echo'<script>

            Swal.fire({
                icon: "error",
                title: "Error",
                text: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
                showConfirmButton: true,
                confirmButtonText: "Cerrar"
                }).then(function(result){
                if (result.value) {

                window.location = "categories";

                }
              })

            </script>';

        }

      }

    }

    /*=============================================
    BORRAR CATEGORIA
    =============================================*/

    static public function ctrBorrarCategoria(){

      if(isset($_GET["idCategoria"])){

        $tabla ="categories";
        $datos = $_GET["idCategoria"];

        $respuesta = ModelCategories::mdlBorrarCategoria($tabla, $datos);

        if($respuesta == "ok"){

          echo'<script>

            Swal.fire({
                icon: "success",
                title: "La categoría ha sido borrada correctamente",
                showConfirmButton: true,
                confirmButtonText: "Cerrar"
                }).then(function(result){
                    if (result.value) {

                    window.location = "categories";

                    }
                  })

            </script>';
        }
      }

    }
}
