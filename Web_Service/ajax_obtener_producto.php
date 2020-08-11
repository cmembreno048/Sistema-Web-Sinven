<?php
  include("../clases/Conexionbd.php");
  include("../clases/Ventas.php");

if (isset($_POST)) {

  $cod_producto = $_POST["cod_producto"];

  $objiniciosesion = new Ventas();
  echo $objiniciosesion->obtener_Productos($cod_producto, $conexion);

}

?>
