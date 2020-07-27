<?php
  include("../clases/Conexionbd.php");
  include("../clases/Ventas.php");

if (isset($_POST)) {

  $codproducto = $_POST["codproducto"];
  $cantidad = $_POST["cantidad"];

  $objiniciosesion = new Ventas();
  $objiniciosesion->constructortemporal($codproducto,$cantidad , $conexion);
  echo $objiniciosesion->insertarTablaTemp();

}


 ?>
