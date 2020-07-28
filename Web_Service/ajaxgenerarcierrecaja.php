<?php
  include("../clases/Conexionbd.php");
  include("../clases/CierreCaja.php");


if (isset($_POST)) {

  $efectivo_caja = $_POST["efectivo_caja"];


  $objiniciosesion = new CierreCaja( $conexion);
  $objiniciosesion->constructor2($efectivo_caja);
  echo $objiniciosesion->generarcaja();

}


 ?>
