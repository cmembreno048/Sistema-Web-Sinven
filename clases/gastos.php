<?php

/**
 *
 */
class Gastos
{

  var $descripcion;
  var $cantidad;
  var $tipo;
  var $conexion;

  function __construct($descripcion_gasto, $cantidad_gasto, $radio_gasto, $conexion)
  {
    $this->descripcion = $descripcion_gasto;
    $this->cantidad = $cantidad_gasto;
    $this->tipo = $radio_gasto;
    $this->conexion = $conexion;
  }

function insertarGasto(){
  $fecha = date("Y-m-d");
  $insertgasto =  "insert into tbl_mv_gastos(secuencia_tipo_gasto, descripcion_tipo_gasto, costo_gasto, fecha_gasto)
              VALUES (".$this->tipo.",'".$this->descripcion."',".$this->cantidad.",'".$fecha."')";
              
  mysqli_query($this->conexion, $insertgasto);

  if (mysqli_error($this->conexion)){

    echo $respuesta="2";

  }else {
      echo $respuesta="1";
  }


}

}




 ?>
