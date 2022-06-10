<?php

/*=============================================
=         CONTROLADORES  REQUERIDOS           =
==============================================*/

require_once "controladores/plantilla.controlador.php";
require_once "controladores/colaboradores.controlador.php";
require_once "controladores/nuevocolaborador.controlador.php";
require_once "controladores/encuesta.controlador.php";
require_once "controladores/mision.controlador.php";
require_once "controladores/vision.controlador.php";
require_once "controladores/manuales.controlador.php";
require_once "controladores/instructivos.controlador.php";
require_once "controladores/procedimientos.controlador.php";


require_once "modelos/colaboradores.modelo.php";
require_once "modelos/nuevocolaborador.modelo.php";
require_once "modelos/encuesta.modelo.php";
require_once "modelos/mision.modelo.php";
require_once "modelos/vision.modelo.php";
require_once "modelos/manuales.modelo.php";
require_once "modelos/instructivos.modelo.php";
require_once "modelos/procedimientos.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();