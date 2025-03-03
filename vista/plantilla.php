
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema POS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assest/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assest/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assest/dist/css/adminlte.min.css">
  <link rel="icon" href="assest/dist/img/Logo_POS.png">

  <!-- DataTables -->
  <link rel="stylesheet" href="assest/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assest/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assest/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<?php
if(isset($_GET["ruta"])){
  if($_GET["ruta"]=="inicio" || 
     $_GET["ruta"]=="VUsuario"){

    include "asideMenu.php";

    include $_GET["ruta"].".php";

    include "footer.php";
  }
}
else{
   include "vista/login.php";
}
?>
</html>
