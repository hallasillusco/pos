<?php

// class Conexion{
  
//   static public function conectar(){
//     $host="switchback.proxy.rlwy.net";
//     $db="pos";
//     $userDB="root";
//     $passDB="qEpAkkRgztGhrXyvVHPmXPElubzhDmNE";
//     //$portDB="8080";
//     mysql://root:qEpAkkRgztGhrXyvVHPmXPElubzhDmNE@switchback.proxy.rlwy.net:54258/railway
//     ///mysql://root:bXghUUpWLcstSJapTdNBYqgozDipggaI@ballast.proxy.rlwy.net:26325/railway
//     $link=new PDO("mysql:host=".$host.";"."dbname=".$db, $userDB, $passDB);
//     $link->exec("set names utf8");
//     return $link;
//   } 
  class Conexion{
  
   static public function conectar(){
       $host="yamabiko.proxy.rlwy.net";
     $db="railway";
       $userDB="root";
   $passDB="GIqLftZnKUMpBaBXRYwVThdZGlCQaNMH";
         // mysql://root:GIqLftZnKUMpBaBXRYwVThdZGlCQaNMH@yamabiko.proxy.rlwy.net:22759/railway
       ///mysql://root:bXghUUpWLcstSJapTdNBYqgozDipggaI@ballast.proxy.rlwy.net:26325/railway
       $link=new PDO("mysql:host=".$host."yamabiko.proxy.rlwy.net"."dbname=".$db, $userDB, $passDB);
       //$link=new PDO("mysql:host=".$host.";"."dbname=".$db, $userDB, $passDB);
       $link->exec("set names utf8");
       return $link;
     } 
  
}