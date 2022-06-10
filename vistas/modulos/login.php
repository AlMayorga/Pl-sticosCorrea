<div id="back"></div>

<div class="login-box">
  
  <div class="login-logo">

    <img src="vistas/img/images/Marca_Firma_Plásticos Correa-02-02.png" class="img-responsive" style="padding:30px 10px 0px 10px">

  </div>

  <div class="login-box-body">

    <p class="login-box-msg">Inicio  de sesion</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Colaborador" name="ingColaborador" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      
      </div>

      <div class="row">
       
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        
        </div>

      </div>

      <?php

        $login = new ControladorColaboradores();
        $login -> ctrIngresoColaborador();
        
      ?>

    </form>

  </div>

</div>