<?php
  include("../clases/Conexionbd.php");
  include("../clases/Productos.php");


if (isset($_POST)) {

  $nombre_corto = $_POST["nombre_corto"];
  $descripcion = $_POST["descripcion"];
  $precio_may = $_POST["precio_may"];
  $precio_min = $_POST["precio_min"];
  $categoria_prod = $_POST["categoria_prod"];
  $unidad_medida = $_POST["unidad_medida"];

  $objiniciosesion = new Productos($nombre_corto,$descripcion ,$precio_may ,$precio_min ,$categoria_prod , $unidad_medida, $conexion);
  echo $objiniciosesion->registrarproducto();

}


 ?>
