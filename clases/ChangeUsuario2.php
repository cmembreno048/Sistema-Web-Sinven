<?php
Session_start();

class ChangeUsuario
{

  var $respuesta1;
  var $respuesta2;
  var $respuesta3;
  var $conexion;
  var $sumador=0;

  function __construct($respuesta1, $respuesta2, $respuesta3, $conexion)
  {
    $this->respuesta1 = $respuesta1;
    $this->respuesta2 = $respuesta2;
    $this->respuesta3 = $respuesta3;
    $this->conexion = $conexion;
  }

  function validarrespuestas(){

    $SelUsuario = "SELECT descripcion_respuesta FROM tbl_ms_respuestas_recuperacion WHERE secuencia_usuario = ".$_SESSION["newsession"];
    $result = mysqli_query($this->conexion, $SelUsuario);


    while ($row = mysqli_fetch_array($result)) {

      $pregunta_Validar = $row["descripcion_respuesta"];
    
      if ($pregunta_Validar == $this->respuesta1) {

          $this->sumador++;
      }elseif ($pregunta_Validar == $this->respuesta2) {

          $this->sumador++;
      }elseif ($pregunta_Validar == $this->respuesta3) {

          $this->sumador++;
      }

    }

      echo $this->sumador;

  }


}


 ?>
