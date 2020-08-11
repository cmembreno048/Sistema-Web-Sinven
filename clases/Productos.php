<?php

class Productos
{

  var $nombre_corto;
  var $descripcion;
  var $precio_may;
  var $precio_min ;
  var $categoria_prod ;
  var $unidad_medida ;
  var $conexion;

  

  function registrarproducto($nombre_corto,$descripcion ,$precio_may ,$precio_min ,$categoria_prod , $unidad_medida, $conexion){
    if (trim($this->nombre_corto)!= ""  &&  trim($this->descripcion)!= "" &&  trim($this->precio_may)!= ""  &&  trim($this->precio_min)!= "" ) {
      $fecha = date("Y-m-d");
      $existencia = 0;
      $insertarproducto = " INSERT INTO tbl_mp_registro_maestro_productos( nombre_corto_producto, descripcion_producto, precio_mayorista, precio_minorista, fecha_creacion_registro_producto, fecha_actualizacion_registro_productos, secuencia_categoria_productos,secuencia_unidad_medida_producto, existencia_actual)
                            VALUES ('".$this->nombre_corto."','".$this->descripcion."',".$this->precio_may.",".$this->precio_min.",'".$fecha."','".$fecha."',".$this->categoria_prod.",".$this->unidad_medida.",".$existencia.")";

      mysqli_query($this->conexion, $insertarproducto);
      echo $resutaldo = "1";
    }else {
      echo $resutaldo = "2";
    }

  }
  function obtener_Productos($conexion){

      $array_response = array();
      $consultarproductos = "SELECT secuencia_registro_producto,descripcion_producto,existencia_actual FROM tbl_mp_registro_maestro_productos";

      $result = mysqli_query($conexion, $consultarproductos);

      $filas = mysqli_fetch_array($result);

      while($filas != null){

        $classobjresponse = new stdClass();

        $classobjresponse->cod_producto = $filas["secuencia_registro_producto"];;
        $classobjresponse->descripcion = $filas["descripcion_producto"];;
        $classobjresponse->existencia = $filas["existencia_actual"];;

        array_push($array_response, $classobjresponse);

        $filas = mysqli_fetch_array($result);

      }
     return $array_response;

  }

}


 ?>
