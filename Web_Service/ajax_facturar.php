<?php
  include("../clases/Conexionbd.php");
  include("../clases/Ventas.php");

if (isset($_POST)) {

  $row = $_POST["row"];
  $total = $_POST["total"];


  $objiniciosesion = new Ventas();
  $objiniciosesion->contructorfacturar($total, $conexion);
  echo $objiniciosesion->Facturar($row);

}


 ?>
