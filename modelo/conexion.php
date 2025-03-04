<?php


  class Conexion{
  
   static public function conectar(){
       $host="localhost";
     $db="pos";
       $userDB="root";
   $passDB="";
         // mysql://root:GIqLftZnKUMpBaBXRYwVThdZGlCQaNMH@yamabiko.proxy.rlwy.net:22759/railway
      
       $link=new PDO("mysql:host=".$host.";"."dbname=".$db, $userDB, $passDB);
       $link->exec("set names utf8");
       return $link;
     } 
  
}