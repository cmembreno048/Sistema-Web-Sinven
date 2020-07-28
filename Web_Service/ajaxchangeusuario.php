<?php
  include("../clases/Conexionbd.php");
  include("../clases/ChangeUsuario.php");


if (isset($_POST)) {

  $usuario = $_POST["usuario"];

  $objiniciosesion = new ChangeUsuario($usuario, $conexion);
  echo $objiniciosesion->validarexistenciausuario();

}


 ?>
