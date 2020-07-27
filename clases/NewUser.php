<?php

class NewUser
{

  var $tipoemple;
  var $respuesta1;
  var $respuesta2;
  var $respuesta3;
  var $nombre;
  var $apellido;
  var $nacimiento;
  var $usuario;
  var $pass1;
  var $conexion;


  function __construct( $pass1, $usuario, $nacimiento, $apellido, $nombre, $tipoemple, $respuesta1, $respuesta2, $respuesta3, $conexion)
  {
      $this->pass1 = $pass1;
      $this->usuario = $usuario;
      $this->nacimiento = $nacimiento;
      $this->apellido = $apellido;
      $this->nombre = $nombre;
      $this->tipoemple = $tipoemple;
      $this->respuesta1 = $respuesta1;
      $this->respuesta2 = $respuesta2;
      $this->respuesta3 = $respuesta3;
      $this->conexion = $conexion;

  }

  function insertarnewmeple(){
    $fecha = date("Y-m-d");
    $estadoemple = 1;
    $consultarexistencia = " select id_usuario from tbl_ms_registro_usuario where id_usuario = '".$this->usuario."'" ;
    $result = mysqli_query($this->conexion, $consultarexistencia);
    $row = mysqli_fetch_array($result);


if ($row == null) {
  if ( trim($this->nombre) != "" && trim($this->apellido) != "" && trim($this->nacimiento) != "" && trim($this->usuario) != "" && trim($this->pass1) != "" && trim($this->respuesta1) != ""  ) {

    if (trim($this->respuesta2) != "" && trim($this->respuesta3) != "" ) {

      $insertar =  "insert into tbl_ms_registro_usuario(id_usuario, contrasenia, nombre_usuario, apellido_usuario, fecha_nacimiento, fecha_creacion_registo_usuario,fecha_actualizacion_registro_usuario,fecha_cambio_contrasenia, codigo_estado_usuario, codigo_tipo_usuario)
      VALUES ( '".$this->usuario."','".$this->pass1."','".$this->nombre."','".$this->apellido."','".$this->nacimiento."','".$fecha."','".$fecha."','".$fecha."',".$estadoemple.",".$this->tipoemple.")";

          mysqli_query($this->conexion, $insertar);

          $ultimoempleadoinsertado = "select secuencia_usuario from tbl_ms_registro_usuario order by secuencia_usuario desc limit 1";
          $result = mysqli_query($this->conexion, $ultimoempleadoinsertado);
          $row = mysqli_fetch_array($result);
          if ($row != null){
            $secuencia_usuario = $row["secuencia_usuario"];

            $insertarpregunts= "insert into tbl_ms_respuestas_recuperacion(secuencia_usuario, descripcion_respuesta, fecha_creacion_registro_respuesta_usuario, fecha_actualizacion_registro_repuesta_usuario, registro_activo_respuesta)
             values ('".$secuencia_usuario."','".$this->respuesta1."','".$fecha."','".$fecha."','".$fecha."')" ;
             mysqli_query($this->conexion, $insertarpregunts);

             $insertarpregunts2= "insert into tbl_ms_respuestas_recuperacion(secuencia_usuario, descripcion_respuesta, fecha_creacion_registro_respuesta_usuario, fecha_actualizacion_registro_repuesta_usuario, registro_activo_respuesta)
              values ('".$secuencia_usuario."','".$this->respuesta2."','".$fecha."','".$fecha."','".$fecha."')" ;
              mysqli_query($this->conexion, $insertarpregunts2);

              $insertarpregunts3= "insert into tbl_ms_respuestas_recuperacion(secuencia_usuario, descripcion_respuesta, fecha_creacion_registro_respuesta_usuario, fecha_actualizacion_registro_repuesta_usuario, registro_activo_respuesta)
               values ('".$secuencia_usuario."','".$this->respuesta3."','".$fecha."','".$fecha."','".$fecha."')" ;
               mysqli_query($this->conexion, $insertarpregunts3);

            echo $return = "2";
          }




    }else{
      echo $return = "1";
    }

  }else{
    echo $return = "1";
  }
}else {
  echo $return = "3";
}

  }


}





?>
