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
       $host="localhost";
     $db="pos";
       $userDB="root";
   $passDB="";
       ///mysql://root:bXghUUpWLcstSJapTdNBYqgozDipggaI@ballast.proxy.rlwy.net:26325/railway
       $link=new PDO("mysql:host=".$host.";"."dbname=".$db, $userDB, $passDB);
       $link->exec("set names utf8");
       return $link;
     } 
  
}