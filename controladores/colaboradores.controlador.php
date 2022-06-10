<?php

class ControladorColaboradores{

    /*=============================================
      =           INGRESO DE COLABORADOR       =
      =============================================*/

    static public function ctrIngresoColaborador(){

        if(isset($_POST["ingColaborador"])){

            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingColaborador"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

                    $tabla = "colaboradores";

                    $item = "colaborador";
                    
                    $valor = $_POST["ingColaborador"];

                    $respuesta = ModeloColaboradores::MdlMostrarColaboradores($tabla, $item, $valor);

                    if($respuesta["colaborador"] == $_POST["ingColaborador"] && $respuesta["password"] == $_POST["ingPassword"]);

                    $_SESSION["iniciarSesion"] ="ok";

                    echo '<script>

                        window.location = "inicio";

                    </script>';

                    echo '<br><div class="alert alert-success"> Bienvenido </div>';
                                
           }  else{

                    echo '<br><div class="alert alert-danger"> Error al ingresar, vuelve a intentar </div>';

           }     
        }

    }

    /*=============================================
      =           REGISTRO DE COLABORADOR       =
      =============================================*/

      static public function ctrCrearColaborador(){

        if(isset($_POST["nuevoColaborador"])){

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) && 
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoColaborador"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){

                  /*===========================================
                  =                VALIDAR IMAGEN             =
                  =============================================*/

                  $ruta = "";

                  if(isset($_FILES["nuevaFoto"]["tmp_name"])){

                    list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
                    
                    $nuevoAncho = 500;
                    $nuevoAlto = 500;

                      /*===============================================
                      = DIRECTORIO DONDE VAN A SER GUARDADAS LAS FOTOS =
                      =================================================*/

                      $directorio = "vistas/img/colaboradores/".$_POST["nuevoColaborador"];

                      mkdir($directorio, 0755);

                      /*=========================================================================
                      = DE ACUERDO AL TIPO DE IMAGEN APLICAMOS POR DEFECTO LAS FUNCIONES DE PHP =
                      ===========================================================================*/

                      if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

                        /*===============================================
                        =       GUARDAR LA IMAGEN EN EL DIRECTORIO      =
                        =================================================*/

                        $aleatorio = mt_rand(100,999);

                        $ruta = "vistas/img/colaboradores/".$_POST["nuevoColaborador"]."/".$aleatorio.".jpg";

                        $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);

                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0,  $nuevoAncho, $nuevoAlto, $ancho, $alto);

                        imagejpeg($destino, $ruta);
                      }

                      if($_FILES["nuevaFoto"]["type"] == "image/png"){

                        /*===============================================
                        =       GUARDAR LA IMAGEN EN EL DIRECTORIO      =
                        =================================================*/

                        $aleatorio = mt_rand(100,999);

                        $ruta = "vistas/img/colaboradores/".$_POST["nuevoColaborador"]."/".$aleatorio.".png";

                        $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);

                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0,  $nuevoAncho, $nuevoAlto, $ancho, $alto);

                        imagepng($destino, $ruta);
                      }


                  }

                        $tabla = "colaboradores";
                        
                        $datos = array("nombre" => $_POST["nuevoNombre"],
                                       "calaborador" => $_POST["nuevoColaborador"],
                                       "password" => $_POST["nuevoPassword"],
                                       "perfil" => $_POST["nuevoPerfil"],
                                       "foto" =>$ruta);

                        $respuesta = ModeloColaboradores::mdlIngresarColaborador($tabla, $datos);
                           
                        if($respuesta == "ok"){

                          echo '<script>
                  
                          swal({
        
                            type: "success",
                            title: "¡¡El ingreso fue exitoso!!", 
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
        
                          }).then((result)=>{
        
                            if(result.value){
        
                                window.location = "inicio";
        
                            }
                      
                          });
                        
                          </script>';

                        }
                }else{

                  echo '<script>
                  
                  swal({

                    type: "error",
                    title: "¡¡El usuario no puede ir vacio, ni llevar caracteres especiales!!", 
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false

                  }).then((result)=>{

                    if(result.value){

                        window.location = "inicio";

                    }
              
                  });
                
                  </script>';
                }
          }
        }            
      }       