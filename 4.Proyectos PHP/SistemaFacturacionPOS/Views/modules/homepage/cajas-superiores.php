<?php

$item = null;
$valor = null;
$orden = "id";

$ventas = ControllerVentas::ctrSumaTotalVentas();

$categorias = ControllerCategories::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$clientes = ControllerClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

$productos = ControllerProducts::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);

?>



<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">

    <div class="inner">

      <h2>Total de Ventas</h2>

      <h3>$<?php echo number_format($ventas["total"],2); ?></h3>

    </div>

    <div class="icon">

      <i class="ion ion-social-usd"></i>

    </div>

    <a href="admin-ventas" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-green">

    <div class="inner">

      <h2>Total de Categorías</h2>

      <h3><?php echo number_format($totalCategorias); ?></h3>

    </div>

    <div class="icon">

      <i class="ion ion-clipboard"></i>

    </div>

    <a href="categories" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-yellow">

    <div class="inner">

      <h2>Total de Clientes</h2>

      <h3><?php echo number_format($totalClientes); ?></h3>

    </div>

    <div class="icon">

      <i class="ion ion-person-add"></i>

    </div>

    <a href="clientes" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-red">

    <div class="inner">

      <h2>Total de Productos</h2>

      <h3><?php echo number_format($totalProductos); ?></h3>

    </div>

    <div class="icon">

      <i class="ion ion-ios-cart"></i>

    </div>

    <a href="productos" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>

  </div>

</div>
