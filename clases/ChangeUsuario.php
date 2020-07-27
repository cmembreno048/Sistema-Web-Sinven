<?php
Session_start();

class ChangeUsuario
{

  var $usuario;
  var $conexion;

  function __construct($usuario, $conexion)
  {
    $this->usuario = $usuario;
    $this->conexion = $conexion;
  }

  function validarexistenciausuario(){

    $SelUsuario = "SELECT secuencia_usuario, id_usuario FROM tbl_ms_registro_usuario WHERE id_usuario = '".$this->usuario."'";
    $result = mysqli_query($this->conexion, $SelUsuario);
    $row = mysqli_fetch_array($result);

    if ($row != null) {
      $respuesta= $row['secuencia_usuario'];
      $_SESSION["newsession"]=$respuesta;
      echo "1";
    }else {
      echo "2";
    }

  }


}


 ?>
