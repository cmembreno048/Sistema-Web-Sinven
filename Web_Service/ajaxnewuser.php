<?php
  include("../clases/Conexionbd.php");
  include("../clases/NewUser.php");


if (isset($_POST)) {

  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $nacimiento = $_POST["nacimiento"];
  $usuario = $_POST["usuario"];
  $pass1 = $_POST["pass1"];
  $tipoemple = $_POST["radio"];
  $respuesta1 = $_POST["respuesta1"];
  $respuesta2 = $_POST["respuesta2"];
  $respuesta3 = $_POST["respuesta3"];

  $objiniciosesion = new NewUser( $pass1, $usuario, $nacimiento, $apellido, $nombre, $tipoemple, $respuesta1, $respuesta2, $respuesta3, $conexion);
  echo $objiniciosesion->insertarnewmeple();

}


 ?>
