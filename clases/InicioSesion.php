<?php
//include ("Web_Service_Res.php");

Session_start();

class InicioSesion {

  function validacionUsCon($usuario, $contrasenia, $conexion){

    $lista = array();
    $objasnwer = new stdClass();

    if ($usuario && $contrasenia != "") {
      
      $SelUsuario = "select id_usuario,contrasenia,nombre_usuario,apellido_usuario,codigo_tipo_usuario  from tbl_ms_registro_usuario where contrasenia = '".$contrasenia."' and id_usuario = '".$usuario."'";

      $request_consulta = mysqli_query($conexion, $SelUsuario);

      $resultado = mysqli_fetch_array($request_consulta);

            if ($resultado != null) {
                    
                  $nombreusuario = $resultado['nombre_usuario']." ".$resultado['apellido_usuario'];

                  $_SESSION["nombreusuario"] = $nombreusuario;
                  $_SESSION["tipousuario"] = $resultado['codigo_tipo_usuario'];
                  $_SESSION["newsession"] = $nombreusuario;


                  
                  $objasnwer->status = 1;
                  $objasnwer->data = "Correcto";
                  $lista = $objasnwer;
                  

                  return $lista;

            }else {
            
                $objasnwer->status = 0;
                $objasnwer->data = "Incorrrecto";
                $lista = $objasnwer;
                return $lista;
            }
      
      

    }else {
        
      $objasnwer->status = 0;
      $objasnwer->data = "Incorrrecto";
      $lista = $objasnwer;
       return $lista;
      
    }

  }

}

?>
