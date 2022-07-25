<header class="main-header">
  <!--==============================
                LOGOTIPO
  ===================================-->
  <a href="homepage" class="logo">
    <!-- Logo Mini -->
    <span class="logo-mini">
      <img src="Views/Images/Templates/Logocorto.png" class="img-responsive" style="padding:10px">
    </span>
    <!-- Logo Normal -->
    <span class="logo-lg">
      <img src="Views/Images/Templates/logofactura2.png" class="img-responsive" style="padding:10px 0px">
    </span>
  </a>

  <!--==============================
          BARRA DE NAVEGACION
  ===================================-->
  <!-- Boton de Navegacion -->
  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navegation</span>
    </a>
  <!-- Perfil de Usuario -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <?php
          if($_SESSION["foto"] != ""){
            echo '<img src="'.$_SESSION["foto"].'" class="user-image" alt="User Image">';
          }else {
            echo '<img src="Views/Images/Users/usersdefault.png" class="user-image" alt="User Image">';
          }
          ?>
          <span class="hidden-xs"><?php echo $_SESSION["nombre"]; ?></span>
        </a>
   <!-- Dropdown-toggle Boton Salir -->
        <ul class="dropdown-menu">
          <li class="user-body">
            <div class="pull-right">
              <a href="cerrar-session" class="btn btn-success btn-flat"><i class="fa fa-sign-out"></i> Cerrar sesion</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>

  </nav>

</header>
