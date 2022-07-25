<?php

require_once "../Controllers/productos.controller.php";
require_once "../Models/productos.model.php";

class AjaxProductos{

  /*=============================================
  GENERAR EL CODIGO A PARTIR DEL ID CATEGORIA
  =============================================*/
  public $idCategoria;
  public function ajaxCrearCodigoProducto(){

    $item = "id_categoria";
    $valor = $this->idCategoria;
    $orden = "id";

    $respuesta = ControllerProducts::ctrMostrarProductos($item, $valor, $orden);

    echo json_encode($respuesta);


  }
  /*=============================================
  EDITAR PRODUCTO
  =============================================*/
  public $idProducto;
  public $traerProductos;
  public $nombreProducto;

  public function ajaxEditarProducto(){

      if($this->traerProductos == "ok"){

            $item = null;
            $valor = null;
            $orden = "id";

            $respuesta = ControllerProducts::ctrMostrarProductos($item, $valor, $orden);

            echo json_encode($respuesta);

      }else if($this->nombreProducto != ""){

        $item = "descripcion";
        $valor = $this->nombreProducto;
        $orden = "id";

        $respuesta = ControllerProducts::ctrMostrarProductos($item, $valor, $orden);

        echo json_encode($respuesta);


      }else{

            $item = "id";
            $valor = $this->idProducto;
            $orden = "id";

            $respuesta = ControllerProducts::ctrMostrarProductos($item, $valor, $orden);

            echo json_encode($respuesta);
      }
  }

}

/*============================================================================================================
----------------------------------------------------METODOS-------------------------------------------------
==============================================================================================================*/

/*===================================================
GENERAR EL CODIGO A PARTIR DEL ID CATEGORIA - METODO
=====================================================*/
if(isset($_POST["idCategoria"])){
  $codigoProducto = new AjaxProductos();
  $codigoProducto -> idCategoria = $_POST["idCategoria"];
  $codigoProducto -> ajaxCrearCodigoProducto();

}
/*=============================================
EDITAR PRODUCTO - METODO
=============================================*/

if(isset($_POST["traerProductos"])){

  $editarProductos = new AjaxProductos();
  $editarProductos -> traerProductos = $_POST["traerProductos"];
  $editarProductos -> ajaxEditarProducto();

}
/*=============================================
TRAER PRODUCTO - METODO
=============================================*/

if(isset($_POST["idProducto"])){

  $traerProducto = new AjaxProductos();
  $traerProducto -> idProducto = $_POST["idProducto"];
  $traerProducto -> ajaxEditarProducto();

}
/*=============================================
TRAER PRODUCTO - METODO
=============================================*/

if(isset($_POST["nombreProducto"])){

  $traerProducto = new AjaxProductos();
  $traerProducto -> nombreProducto = $_POST["nombreProducto"];
  $traerProducto -> ajaxEditarProducto();

}
