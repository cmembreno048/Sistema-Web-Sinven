<?php

session_start();

class ChangeUsuario3
{
  var $con1;
  var $con2;
  var $conexion;

  function __construct($con1 ,$con2 ,$conexion)
  {
    $this->con1 = $con1;
    $this->con2 = $con2;
    $this->conexion = $conexion;
  }

function verificarcontraseña(){

  if (trim($this->con1) != "" && trim($this->con2) != "") {

    $UpdateCon = "UPDATE `tbl_ms_registro_usuario` SET
                  `contrasenia`= '".$this->con1."',
                  `fecha_actualizacion_registro_usuario`='".date("Y")."-".date("m")."-".date("d")."',
                  `fecha_cambio_contrasenia`='".date("Y")."-".date("m")."-".date("d")."'
                  WHERE `secuencia_usuario` = '".$_SESSION["newsession"]."'";

        mysqli_query($this->conexion, $UpdateCon);

        if (mysqli_error($this->conexion)){
            echo "3";
        }
        echo "1";


  }

}

}



 ?>
