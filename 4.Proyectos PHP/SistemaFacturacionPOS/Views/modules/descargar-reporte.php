<?php

require_once "../../Controllers/ventas.controller.php";
require_once "../../Models/ventas.model.php";
require_once "../../Controllers/clientes.controller.php";
require_once "../../Models/clientes.model.php";
require_once "../../Controllers/users.controller.php";
require_once "../../Models/users.model.php";

$reporte = new ControllerVentas();
$reporte -> ctrDescargarReporte();
