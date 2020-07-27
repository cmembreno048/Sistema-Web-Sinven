<?php 
session_start();
include("../clases/Conexionbd.php");

  if ($_SESSION["newsession"] == null || $_SESSION["newsession"] == "") {
      header('Location: ../index.php');

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="../js/jquery.min.js">
    </script>
    <link rel="stylesheet" href="../css/stylesmenu.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js">
    </script>

    <script type="text/javascript" src="../js/JavaScript/jschangecontraseña2.js" ></script>
    <title> Preguntas de Seguridad</title>
  </head>
  <body>


        <br>
        <br>
        <br>
        <br>
    <div  class="Recuperacion1">

    </div>

    <div  class="Recuperacion2">

<br>
<img src="../img/IUsuarios.png" align="left" width="55">
      <p class="Titulos"><b>Recuperacion de Contraseña</b></p>

      <hr class="linea" >
      <br>
      <p class="pa"><b>Seleccione las preguntas de seguridad con su
        respectiva respuesta para poder restablecer su contraseña</b></p>
<br>
      <div class="rcontra">


<select class="ls"style="width:500px;" id="Pregunta1" >
  <?php

        $SelUsuario = "SELECT * FROM tbl_ms_preguntas_recuperacion ";
        $result = mysqli_query($conexion, $SelUsuario);
       while ($row = mysqli_fetch_array($result))
       {
       ?>

     <option value="<?php echo $row['secuencia_preguntas']?>"><?php echo $row ['descripcion_preguntas'];?></option>

       <?php
       }
       ?>

  <br><br><br>
  <input id="respuesta1" class="ls"type="text" style="width:500px;" name="" value="">


  <br><br>
  <select class="ls" style="width:500px;" id="Pregunta2" >

    <?php

          $SelUsuario = "SELECT * FROM tbl_ms_preguntas_recuperacion ";
          $result = mysqli_query($conexion, $SelUsuario);
         while ($row = mysqli_fetch_array($result))
         {
         ?>

       <option value="<?php echo $row['secuencia_preguntas']?>"><?php echo $row ['descripcion_preguntas'];?></option>

         <?php
         }
         ?>


    <br><br><br>
    <input id="respuesta2" class="ls"type="text" style="width:500px;"name="" value="">


    <br><br>
    <select class="ls" style="width:500px;" id="Pregunta3" >

      <?php

            $SelUsuario = "SELECT * FROM tbl_ms_preguntas_recuperacion ";
            $result = mysqli_query($conexion, $SelUsuario);
           while ($row = mysqli_fetch_array($result))
           {
           ?>

         <option value="<?php echo $row['secuencia_preguntas']?>"><?php echo $row ['descripcion_preguntas'];?></option>

           <?php
           }
           ?>


      <br><br><br>
      <input id="respuesta3" class="ls"type="text" style="width:500px;"name="" value="">


<br><br>
<button onclick="verificarusuario()" class="bt3"type="button" >Siguiente</button>

    </div>

  </body>
</html>
