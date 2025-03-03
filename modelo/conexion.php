<?php

class Conexion{
  
  static public function conectar(){
    $host="ballast.proxy.rlwy.net";
    $db="railway";
    $userDB="root";
    $passDB="bXghUUpWLcstSJapTdNBYqgozDipggaI";
    mysql://root:bXghUUpWLcstSJapTdNBYqgozDipggaI@ballast.proxy.rlwy.net:26325/railway
    $link=new PDO("mysql:host=".$host.";"."dbname=".$db, $userDB, $passDB);
    $link->exec("set names utf8");
    return $link;
  } 
  
}