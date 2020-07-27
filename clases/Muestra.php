<?php
/**
 *
 */
class Muestra
{

  var $productobuscar;
  var $producto;
  var $contidad;

  function __construct( $conexion)
  {
    $this->conexion = $conexion;
  }
  function contructorsobrecargado1($productobuscar){
    $this->productobuscar = $productobuscar;
  }

  function constructor2($codproducto,$cantidad){
    $this->codproducto = $codproducto;
    $this->cantidad = $cantidad;
  }


  function ingresarmuestra(){
    $fecha = date("Y-m-d");
  $buscarprod = "select existencia_actual  from tbl_mp_registro_maestro_productos where secuencia_registro_producto  = ".$this->codproducto ;
  $result = mysqli_query($this->conexion, $buscarprod);
  if ($row = mysqli_fetch_array($result)) {

    $existenciaactual =  $row["existencia_actual"];
    $nuevaexistencia = 0;
    $nuevaexistencia =$existenciaactual - $this->cantidad;

    $insertarmuestra = "insert into tbl_mv_muestras( secuencia_registro_productos, cantidad_muestra, fecha_muestra_dada)
                        VALUES (".$this->codproducto.",".$this->cantidad.",'".$fecha."')"  ;

    mysqli_query($this->conexion, $insertarmuestra);

    $insertarnuevaexistencia = "update tbl_mp_registro_maestro_productos set existencia_actual=".$nuevaexistencia." where secuencia_registro_producto = ".$this->codproducto ;
    mysqli_query($this->conexion, $insertarnuevaexistencia);

    echo $respuestas = "1";

  }else {
    echo $respuesta = "2";
  }



  }



}



 ?>
