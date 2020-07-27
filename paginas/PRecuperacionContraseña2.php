<?php
session_start();

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

    <script type="text/javascript" src="../js/JavaScript/jschangecontraseña3.js" ></script>

    <title>Actualizar Contraseña</title>
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
        <div class="recu">
          <br>



      <label><b>Ingrese la nueva contraseña:</b></label><br>
      <input id="con1" type="password"style="width:300px;" ><br><br>

      <label for=""><b>Repita la nueva contraseña:</b></label><br>
      <input  id="con2" type="password"style="width:300px;" name="" value="">
<br><br><br>
<button onclick="Actualizarcontraseña()" class="btn4"type="button" name="button">Actualizar</button>

</div>
    </div>

  </body>
</html>
