<?php
require_once "conexion.php";
class modeloUsuario{

        static public function mdlAccesoUsuario($usuario){
    $stmt=conexion::conectar()->prepare("select * from usuario where login_usuario='$usuario'");

    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();
    $stmt->null;



    }

    static public function mdlInfoUsuarios(){

        $stmt=conexion::conectar()->prepare("select * from usuario");

    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null; 
    }
}