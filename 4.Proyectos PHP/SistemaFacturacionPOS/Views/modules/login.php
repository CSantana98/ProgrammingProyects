<div id="back"></div>

<div class="content">
  <img src="Views/Images/Templates/background2.png" width="500px">


  <img src="Views/Images/Templates/background5.png" width="550px" style="margin-left:800px">
</div>

<div class="content">
  <img src="Views/Images/Templates/background4.png" width="500px">
  <img src="Views/Images/Templates/background3.png" width="500px" style="margin-left:800px">
</div>

<div class="login-box2" style="margin-top:-650px">
  <!--login-logo -->
  <div class="login-logo">
    <img src="Views/Images/Templates/logofactura2.png" class="img-responsive">
  </div>
  <!-- -->
  <div class="login-box-body">
    <h3 class="login-box-msg" style="font-family:Impact, Charcoal, sans-serif; color:white">Ingresar al Sistema</h3>
  <!-- -->

    <!--login-Campo Ingresar Usuario -->
    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    <!-- -->

    <!--login-Campo Ingresar Password -->
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
    <!-- -->

      <div class="row">

        <div class="col-xs-5">
          <button type="submit" class="btn btn-success btn-block btn-flat">Iniciar sesion</button>
        </div>
      </div>

      <?php

        $login = new ControllerUsers();
        $login -> ctrIngresoUser();

      ?>

    </form>

  </div>

</div>
