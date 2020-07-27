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
    <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/JavaScript/jsregisteruser.js" ></script>
  <link rel="stylesheet" href="../css/stylesmenu.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title></title>
  </head>
  <body>

    <div class="menu">


      <br>
      <br>
      <br>
      <br>



      <a href="PVentas.php">  <button class="botones"type="submit" ><img src="../img/BVentas.png" align="left" width="30">          Ventas</button></a>
    <a href="PInventarioConsultar.php">  <button class="botones"type="submit"><img src="../img/BInventario.png" align="left" width="30">          Inventario</button> </a>
      <a href="PProductos.php">  <button class="botones"type="submit"><img src="../img/BProductos.png" align="left" width="30">          Productos</button></a>
      <a href="PCierrecaja.php">  <button class="botones"type="submit"><img src="../img/BCierrecaja.png" align="left" width="30">        Cierre de Caja</button></a>
    <a href="PRegistrarUsuario.php">  <button class="botones"type="submit"><img src="../img/BUsuarios.png" align="left" width="30">          Usuarios</button></a>
      <a href="PClientes.php">  <button class="botones"type="submit"><img src="../img/BClientes.png" align="left" width="30">        Clientes</button></a>
      <a href="PReportes.php"><button class="botones"type="submit"><img src="../img/BReportes.png" align="left" width="30">        Reportes</button></a>
      <button class="botones"type="submit"><img src="../img/BCerrarsesion.png" align="left" width="30">        Cerrar Sesion</button>

    </div>

    <div class="barra">


      <p class="p">HACIENDA PUEBLO VIEJO</p>

    </div>





        <div  class="contenedor1">
        </div>

        <div  class="contenedor2">
      <br>

      <img src="../img/IUsuarios.png" align="left" width="55">
            <p class="Titulos"><b>Agregar Nuevo Usuario</b></p>
          <hr class="linea" >

                <div class="Inputs">
                  <br>
          <b>Nombre Usuario:</b>   <input id="nombre"type="text" style="width:250px;"name="" >
            <br>
            <br>
            <b>Apellido Usuario:</b> <input id="apellido" type="text" style="width:250px;"name=""  >
            <br>
            <br>
            <label for=""><b>Fecha de Nacimiento:</b></label>
            <br>
            <input type="text" id="fechanac"> <label for="fechanac">AÑO/MES/DIA</label>
            <br>
            <br>
              <b>Usuario:</b> <input id="usuario" type="text" name=""  style="width:250px;"class="inputs2">
              <br>
              <br>
              <b>Contraseña:</b> <input id="pass1" type="text" name="" style="width:250px;"  >

                <br>
                <br>

<label style="height:5px; "><b>Confirmar Contraseña:</b> </label>
<input id="pass2" type="text" name="" style="width:175px; margin-top:-50px;" class=""><br>

          <br>
          <br>
        <br>

              </div>


<div class="PRecu">

  <label for=""><b>Tipo de Usuario</b></label><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">Administrador</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio1" value="2">
    <label class="form-check-label" for="inlineRadio2">Vendedor</label>
  </div>
<br>
<br>
<label for=""><b>Preguntas de Recuperacion</b></label><br>
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
  <input id="respuesta1" class="ls"type="text" style="width:500px;" name="" >


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
    <input id="respuesta2" class="ls"type="text" style="width:500px;"name="" >


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
      <input id="respuesta3" class="ls"type="text" style="width:500px;"name="">

<br>
<br>
<button onclick="cargar()" class="bt1"type="button" name="button">Registrar</button>
<button class="bt2"type="button" name="button">Salir</button>


</div>



        </div>



    <script>
    $("#fechanac").datapicker();
    </script>



  </body>
</html>
