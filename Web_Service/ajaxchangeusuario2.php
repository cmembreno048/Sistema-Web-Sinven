<?php
  include("../clases/Conexionbd.php");
  include("../clases/ChangeUsuario2.php");


if (isset($_POST)) {

  $respuesta1 = $_POST["respuesta1"];
  $respuesta2 = $_POST["respuesta2"];
  $respuesta3 = $_POST["respuesta3"];

  $objiniciosesion = new ChangeUsuario($respuesta1,$respuesta2,$respuesta3, $conexion);
  echo $objiniciosesion->validarrespuestas();

}


 ?>
