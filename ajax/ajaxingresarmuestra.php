<?php
  include("../clases/Conexionbd.php");
  include("../clases/Muestra.php");


if (isset($_POST)) {

  $codproducto = $_POST["productos"];
  $cantidad = $_POST["cantidad"];

  $objiniciosesion = new Muestra( $conexion);
  $objiniciosesion->constructor2($codproducto,$cantidad);
  echo $objiniciosesion->ingresarmuestra();

}


 ?>
