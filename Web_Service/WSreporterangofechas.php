<?php

if (isset($_POST)) {
  include("../clases/Conexionbd.php");
  include("../clases/Reportes.php");

  $fechainicial = $_POST["fechainicial"];
  $fechafinal = $_POST["fechafinal"];

  $objreporte = new Reportes();
  $objreporte->constructorrangofechas($fechainicial, $fechafinal, $conexion);
  echo $objreporte->reportesRangoFecha();


}


?>
