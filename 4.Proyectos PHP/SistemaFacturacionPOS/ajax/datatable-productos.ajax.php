<?php

require_once "../Controllers/productos.controller.php";
require_once "../Models/productos.model.php";

require_once "../Controllers/categories.controller.php";
require_once "../Models/categories.model.php";


class TablaProductos{

    public function mostrarTablaProductos(){

      $item = null;
      $valor = null;
      $orden = "id";
      $productos = ControllerProducts::ctrMostrarProductos($item, $valor, $orden);

      $datosJson = '{
              "data": [';

              for($i = 0; $i < count($productos); $i++){

                /*=============================================
                                TRAEMOS LA IMAGEN
                ==============================================*/
                $imagen = "<img src='".$productos[$i]["imagen"]."' width='40px'>";


                /*=============================================
                                TRAEMOS LAS CATEGORIAS
                =============================================*/
                $item = "id";
        		  	$valor = $productos[$i]["id_categoria"];
        		  	$categorias = ControllerCategories::ctrMostrarCategorias($item, $valor);


                /*===========================================================
                HACEMOS QUE EL STOCK CAMBIE DE COLOR DEPENDIENDO LA CANTIDAD
                =============================================================*/
                if($productos[$i]["stock"] == 0){
                    $stock = "<button class='btn btn-default'>".$productos[$i]["stock"]."</button>";
                }else if($productos[$i]["stock"] <= 10){
                    $stock = "<button class='btn btn-danger'>".$productos[$i]["stock"]."</button>";
                }else if($productos[$i]["stock"] <= 15){
                    $stock = "<button class='btn btn-warning'>".$productos[$i]["stock"]."</button>";
                }else{
                    $stock = "<button class='btn btn-success'>".$productos[$i]["stock"]."</button>";
                }


                /*=============================================
                                TRAEMOS LAS ACCIONES
                =============================================*/
                if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] == "Especial"){

                $botones = "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil'></i></button></div>";
              }else{
                $botones = "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."' codigo='".$productos[$i]["codigo"]."' imagen='".$productos[$i]["imagen"]."'><i class='fa fa-trash'></i></button></div>";
              }

                $datosJson .= '[
                    			      "'.($i+1).'",
                    			      "'.$imagen.'",
                    			      "'.$productos[$i]["codigo"].'",
                    			      "'.$productos[$i]["descripcion"].'",
                    			      "'.$categorias["categoria"].'",
                    			      "'.$stock.'",
                    			      "$ '.number_format($productos[$i]["precio_compra"],2).'",
                    			      "$ '.number_format($productos[$i]["precio_venta"],2).'",
                    			      "'.$productos[$i]["fecha"].'",
                    			      "'.$botones.'"
                    			    ],';
              }

              $datosJson = substr($datosJson, 0, -1);
              $datosJson .=  ']
              }';
              echo $datosJson;

    }
}
/*=============================================
ACTIVAR TABLA DE PRODUCTOS
=============================================*/
$activarProductos = new TablaProductos();
$activarProductos -> mostrarTablaProductos();
