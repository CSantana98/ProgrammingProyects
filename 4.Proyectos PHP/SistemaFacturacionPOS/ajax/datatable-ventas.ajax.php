<?php

require_once "../Controllers/productos.controller.php";
require_once "../Models/productos.model.php";

class TablaProductosVentas{

    public function mostrarTablaProductosVentas(){

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
                $botones = "<div class='btn-group'><button class='btn btn-primary agregarProducto recuperarBoton' idProducto='".$productos[$i]["id"]."'>Agregar</button></div>";

                $datosJson .= '[
                    			      "'.($i+1).'",
                    			      "'.$imagen.'",
                    			      "'.$productos[$i]["codigo"].'",
                    			      "'.$productos[$i]["descripcion"].'",
                    			      "'.$stock.'",
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
$activarProductosVentas = new TablaProductosVentas();
$activarProductosVentas -> mostrarTablaProductosVentas();
