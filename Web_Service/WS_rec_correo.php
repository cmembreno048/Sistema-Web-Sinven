<?php

  include("../clases/Conexionbd.php");
  include("../clases/correo.php");

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $usuario = $_POST["usuario"];
    $correo_recuperar= "";
    $nombre_usuario_recuperar="";

    $consultausuario = "SELECT  correo_usuario, nombre_usuario FROM tbl_ms_registro_usuario WHERE id_usuario = '".$usuario."'";
    
    $result = mysqli_query($conexion, $consultausuario);

    $r_filas = mysqli_fetch_array($result);

    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $password = "";
    //Reconstruimos la contraseña segun la longitud que se quiera
    for($i=0;$i<5;$i++) {
       //obtenemos un caracter aleatorio escogido de la cadena de caracteres
       $password .= substr($str,rand(0,62),1);

    }

    if($r_filas != null ){

        $correo_recuperar = $r_filas["correo_usuario"];
        $nombre_usuario_recuperar = $r_filas["nombre_usuario"];
        
        $nuevacontraseña = "UPDATE tbl_ms_registro_usuario SET contrasenia ='$password' WHERE correo_usuario = '".$correo_recuperar."'" ;
        
        mysqli_query($conexion, $nuevacontraseña);


    }

    

  $objreccontraseña = new Correo();

  echo Json_encode($objreccontraseña->recuperarCorreo($correo_recuperar, $nombre_usuario_recuperar,$password, JSON_UNESCAPED_UNICODE));

  }else{
    echo "<h1><center>Perdon amiguito no esta disponible :V</center></h1>";
  }

 ?>