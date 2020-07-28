<?php
  include("../clases/Conexionbd.php");
  include("../clases/CierreCaja.php");


if (isset($_POST)) {


  $caja = $_POST["caja"];
  $efectivo_caja = $_POST["efectivo_caja"];
  $sob_fal = $_POST["sob_fal"];


  $objiniciosesion = new CierreCaja( $conexion);
  $objiniciosesion->constructor3($caja, $efectivo_caja,$sob_fal);
  echo $objiniciosesion->guardarcierrecaja();

}


 ?>
