<?php
  include("../clases/Conexionbd.php");
  include("../clases/ChangeUsuario3.php");


if (isset($_POST)) {

  $con1 = $_POST["con1"];
  $con2 = $_POST["con2"];


  $objiniciosesion = new ChangeUsuario3($con1 ,$con2 ,$conexion);
  echo $objiniciosesion->verificarcontraseña();

}


 ?>
