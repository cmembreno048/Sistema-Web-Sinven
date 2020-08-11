<?php

  include("../clases/Conexionbd.php");
  include("../clases/InicioSesion.php");

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $usuario = $_POST["usuario"];
  $contrasenia = $_POST["contrasenia"];

  $objiniciosesion = new InicioSesion();
  echo Json_encode($objiniciosesion->validacionUsCon($usuario, $contrasenia, $conexion), JSON_UNESCAPED_UNICODE);

  }else{
    echo "<h1><center>Perdon amiguito no esta disponible :V</center></h1>";
  }

 ?>
