<?php

require_once "../Controllers/users.controller.php";
require_once "../Models/users.model.php";

class AjaxUsers{

  /*=============================================
	EDITAR USUARIO
	=============================================*/

			public $idUsuario;
			public function ajaxEditarUsuario(){

						$item = "id";
						$valor = $this->idUsuario;

						$respuesta = ControllerUsers::ctrMostrarUsuarios($item, $valor);

						echo json_encode($respuesta);

	}
	/*=============================================
	ACTIVAR USUARIO
	=============================================*/
			public $activarUsuario;
			public $activarId;

			public function ajaxActivarUsuario(){

							$tabla = "users";
							$item1 = "estado";
							$valor1 = $this->activarUsuario;
							$item2 = "id";
							$valor2 = $this->activarId;

							$respuesta = ModelUsers::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

	 }
	 /*=============================================
			VERIFICAR QUE NO SE REPITA EL USUARIO
	 =============================================*/
	 public $validarUsuario;
	 public function ajaxValidarUsuario(){

		 $item = "usuario";
		 $valor = $this->validarUsuario;

		 $respuesta = ControllerUsers::ctrMostrarUsuarios($item, $valor);

		 echo json_encode($respuesta);

	 }

}

/*=============================================
EDITAR USUARIO - METODO
=============================================*/
if(isset($_POST["idUsuario"])){
	$editar = new AjaxUsers();
	$editar -> idUsuario = $_POST["idUsuario"];
	$editar -> ajaxEditarUsuario();

}

/*=============================================
ACTIVAR USUARIO - METODO
=============================================*/
if(isset($_POST["activarUsuario"])){
	$activarUsuario = new AjaxUsers();
	$activarUsuario -> activarUsuario = $_POST["activarUsuario"];
	$activarUsuario -> activarId = $_POST["activarId"];
	$activarUsuario -> ajaxActivarUsuario();

}

/*=============================================
VERIFICAR QUE NO SE REPITA EL USUARIO - METODO
=============================================*/
if(isset($_POST["validarUsuario"])){
	$validarUsuario = new AjaxUsers();
	$validarUsuario -> validarUsuario = $_POST["validarUsuario"];
	$validarUsuario -> ajaxValidarUsuario();

}
