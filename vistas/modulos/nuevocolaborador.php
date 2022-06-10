<div class="content-wrapper">

  <section class="content-header">
    
    <h1 class="text-black h1">
      
     BASE DE DATOS
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Ingresar Colaborador</li>
    
    </ol>

  </section>

 
  <section class="content">

  
    <div class="box">

      <div class="box-header with-border">

     <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarColaborador">

     Agregar Colaborador

     </button>

      </div>
               
      <div class="box-body">
              
        <table class="table table-bordered table-striped dt-responsive tablas">

          <thead>

            <tr>
              <th style="width: 10px;">#</th>
              <th>Nombre</th>
              <th>Colaborador</th>
              <th>Foto</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Último login</th>
              <th>Acciones</th>
            </tr>

          </thead>

          <tbody>

            <tr>

              <td>1</td>
              <td>Usuario Aministrador</td>
              <td>admin</td>
              <td><img src="vistas\img\images/noun-person.png" class="img-thumbnail" width="40px"></td>
              <td>Administrador</td>
              <td><button class="btn btn-success btn-xs"> Activado </button></td>
              <td>2022-06-6 10:58:12</td>
              <td>

                <div>

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>

              </td>

            </tr>
            
          </tbody>

        </table>

      </div>
      
    </div>
    
  </section>
  
</div>

    <!--======================================
    =      MODAL AGREGAR COLABORADOR        =
    ======================================-->

  <div id="modalAgregarColaborador" class="modal fade"  role="dialog">

    <div class="modal-dialog">

      <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

    <!--=====================================
    =      CABEZA DE MODAL                  =
    ======================================-->
        
        <div class="modal-header" style="background:#3c8dbc; color:white">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">INGRESAR COLABORADOR</h4>
        
        </div>

      <!--======================================
      =     CUERPO DEL  MODAL                  =
      ======================================-->
        
          <div class="modal-body">

            <div class="box-body">

            <!-- Entrada nombre  -->

            <div class="form-group">

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="tex" class="form-control input-lg" name=nuevoColaborador" placeholder="Ingresar nombre"required>

              </div>

            </div>

            <!--= Entrada usuario  =-->

            <div class="form-group">

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input type="tex" class="form-control input-lg" name=nuevoUsuario" placeholder="Ingresar usuario"required>

              </div>

            </div>

            <!--= Entrada contraseña  =-->

            <div class="form-group">

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input type="password" class="form-control input-lg" name=nuevoPassword" placeholder="Ingresar Contraseña"required>

              </div>

            </div>

              <!--= Entrada perfil  =-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-id-card"></i></span>

                  <input type="text" class="form-control input-lg" name=nuevoPerfil" placeholder="Ingresar Perfil"required>

                  </div>

                </div>

                <!--= Entrada foto  =-->

                <div class="form-group">
                  
                <div class="panel">SUBIR FOTO</div>

                <input type="file" id="nuevaFoto" name="nuenaFoto">

                <p class="help-block">Peso maximo de la foto 2 MB</p>

                <img src="vistas/img/images/anonymous.png" class="img-thumbnail" width="100px">

                </div>

            </div>

          </div>

          <!--======================================
          =     PIE DEL  MODAL                     =
          ========================================-->
        
          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Colaborador</button>

          </div>

          <?php
          
          $crearColaborador = new controladorColaboradores();
          $crearColaborador -> ctrCrearColaborador();

          ?>

        </form>

    </div>

  </div>

</div>
