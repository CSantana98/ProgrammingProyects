<?php
require_once "controllers/template.controller.php";
require_once "controllers/users.controller.php";
require_once "controllers/categories.controller.php";
require_once "controllers/productos.controller.php";
require_once "controllers/clientes.controller.php";
require_once "controllers/ventas.controller.php";

require_once "models/users.model.php";
require_once "models/categories.model.php";
require_once "models/productos.model.php";
require_once "models/clientes.model.php";
require_once "models/ventas.model.php";

$template = new ControllerTemplate();
$template -> ctrTemplate();
