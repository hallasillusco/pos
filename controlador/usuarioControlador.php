<?php

class controladorUsuario{

    static public function ctrIngresoUsuario(){
      if(isset($_POST["usuario"])){
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];


      $resultado= modeloUsuario::mdlAccesoUsuario($usuario);

      //var_dump($resultado);

      if($resultado["login_usuario"]==$usuario && $resultado["password"]==$password && 
      $resultado["estado"]==1){
        
        echo '<script>
        window.location="inicio";
        </script>';
      }
    }
  }
  static public function ctrInfoUsuarios(){

    $respuesta=modeloUsuario::mdlInfoUsuarios();
    return $respuesta;
}
}
    
    