<?php

Session_start();

class InicioSesion {

  var $usuario;
  var $contrasenia;
  var $conexion;

  function __construct($usuario, $contrasenia, $conexion)
  {
    $this->usuario = $usuario;
    $this->contrasenia = $contrasenia;
    $this->conexion = $conexion;

  }


  function validacionUsCon(){


    $SelUsuario = "select id_usuario from tbl_ms_registro_usuario where id_usuario = '".$this->usuario."'";

    $result = mysqli_query($this->conexion, $SelUsuario);

    $row = mysqli_fetch_array($result);

    if($row != null){

      $SelUsuario2 = "select contrasenia,nombre_usuario,apellido_usuario,codigo_tipo_usuario  from tbl_ms_registro_usuario where contrasenia = '".$this->contrasenia."'";
      $result2 = mysqli_query($this->conexion, $SelUsuario2);

      $row2 = mysqli_fetch_array($result2);

      if ($row2 != null) {

        $respuesta = $row2['nombre_usuario'];
        $nombreusuario = $row2['nombre_usuario']." ".$row2['apellido_usuario'];
        $_SESSION["nombreusuario"] = $nombreusuario;
        $_SESSION["tipousuario"] = $row2['codigo_tipo_usuario'];
        $_SESSION["newsession"] = $respuesta;
        echo "1";


      } else {
        echo "2";
      }

  }else {
    echo "3";
  }

}




}




 ?>
