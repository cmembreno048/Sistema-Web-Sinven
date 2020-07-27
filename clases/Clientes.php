<?php

/**
 *
 */
class Clientes
{
  var $nombre;
  var $apellido;
  var $telefono;
  var $identidad;
  var $radio;
  var $conexion;


  function __construct($nombre,$apellido ,$telefono ,$identidad ,$radio , $conexion)
  {

    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->telefono = $telefono;
    $this->identidad = $identidad;
    $this->radio = $radio;
    $this->conexion = $conexion;


  }

  function registrarCliente(){

    if (  trim(  $this->nombre) != "" && trim(  $this->apellido) != "" && trim(  $this->telefono) != "" && trim(  $this->identidad) != "" ) {

        $fecha = date("Y-m-d");

        $insertarcliente = "  INSERT INTO `tbl_mc_registro_maestro_clientes`( `telefono`, `nombre_cliente`, `apellido_cliente`, `rtn_cliente`, `fecha_creacion_registro_cliente`, `fecha_actualizacion_registro_cliente`, `secuencia_tipo_cliente`)
                            VALUES ('".$this->telefono."','".$this->nombre."','".$this->apellido."','".$this->identidad."','".$fecha."','".$fecha."',".$this->radio.")"   ;

        mysqli_query($this->conexion, $insertarcliente);
        echo $insertarcliente;
                echo $resutaldo = "1";
        }else {
                echo $resutaldo = "2";

        }




    }


  }



?>
