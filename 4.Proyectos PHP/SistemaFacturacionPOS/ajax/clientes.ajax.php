<?php

require_once "../Controllers/clientes.controller.php";
require_once "../Models/clientes.model.php";

class AjaxClientes{

	/*=============================================
	EDITAR CLIENTES
	=============================================*/

	public $idCliente;

	public function ajaxEditarCliente(){

		$item = "id";
		$valor = $this->idCliente;

		$respuesta = ControllerClientes::ctrMostrarClientes($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/
if(isset($_POST["idCliente"])){

	$categoria = new AjaxClientes();
	$categoria -> idCliente = $_POST["idCliente"];
	$categoria -> ajaxEditarCliente();
}
