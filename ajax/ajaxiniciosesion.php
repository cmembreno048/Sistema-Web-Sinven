<?php

  include("../clases/Conexionbd.php");
  include("../clases/InicioSesion.php");


if (isset($_POST)) {

  $usuario = $_POST["usuario"];
  $contrasenia = $_POST["contrasenia"];

  $objiniciosesion = new InicioSesion($usuario, $contrasenia, $conexion);
  echo $objiniciosesion->validacionUsCon();

}


 ?>
