<?php
  include("../clases/Conexionbd.php");
  include("../clases/Clientes.php");


if (isset($_POST)) {

  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $telefono = $_POST["telefono"];
  $identidad = $_POST["identidad"];
  $radio = $_POST["radio"];


  $objiniciosesion = new Clientes($nombre,$apellido ,$telefono ,$identidad ,$radio , $conexion);
  echo $objiniciosesion->registrarCliente();

}


 ?>
