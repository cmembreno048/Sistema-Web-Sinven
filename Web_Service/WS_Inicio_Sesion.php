<?php

  include("../clases/Conexionbd.php");
  include("../clases/InicioSesion.php");


  $usuario = $_POST["usuario"];
  $contrasenia = $_POST["contrasenia"];

  $objiniciosesion = new InicioSesion();
  echo Json_encode($objiniciosesion->validacionUsCon($usuario, $contrasenia, $conexion));

 ?>
