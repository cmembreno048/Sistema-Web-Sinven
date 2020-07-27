<?php
  include("../clases/Conexionbd.php");
  include("../clases/Ventas.php");

if (isset($_POST)) {

  $secuencia_temporal = $_POST["secuencia_temporal"];


  $objiniciosesion = new Ventas();
  $objiniciosesion->constructoreliminardato($secuencia_temporal , $conexion);
  echo $objiniciosesion->eliminarTablaTemp();

}


 ?>
