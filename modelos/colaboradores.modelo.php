<?php

require_once "Conexion.php";

class ModeloColaboradores{

    /*=============================================
    =            Mostrar Colaboradores            =
    ==============================================*/

    static public function mdlMostrarColaboradores($tabla, $item, $valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetch();

        $stmt -> close();
        
        $stmt = null;

    }





    /*=============================================
    =           Registro de colaboradores           =
    =============================================== */

static public function mdlIngresarColaborador($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, colaborador, password, perfil, foto) VALUES (:nombre, :colaborador, :password, :perfil :foto");

    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":colaborador", $datos["colaborador"], PDO::PARAM_STR);
    $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
    $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
    $stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

    if($stmt->execute()){

        return "ok";

    }else{

        return "error";

    }

    $stmt->close();

    $stmt = null;
    }

}
