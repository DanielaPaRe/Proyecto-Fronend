<?php

require_once "conexion.php";

class UsuarioModelo{

    static public function mdlIniciarSesion($usuario, $password){

        $stmt = Conexion::conectar()->prepare(" select * from usuarios ");

        $stmt->bindParam(":usuario",$usuario, PDO::PARAM_STR);
        $stmt->bindParam(":password",$password, PDO::PARAM_STR);

        return $stmt -> fetchAll(PDO::FETCH_CLASS); 

    }

}