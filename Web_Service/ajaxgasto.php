<?php
  include("../clases/Conexionbd.php");
  include("../clases/Gastos.php");


if (isset($_POST)) {

  $descripcion_gasto = $_POST["descripcion_gasto"];
  $cantidad_gasto = $_POST["cantidad_gasto"];
  $radio_gasto = $_POST["radio_gasto"];


  $objiniciosesion = new Gastos( $descripcion_gasto, $cantidad_gasto, $radio_gasto, $conexion);
  echo $objiniciosesion->insertarGasto();

}


 ?>
