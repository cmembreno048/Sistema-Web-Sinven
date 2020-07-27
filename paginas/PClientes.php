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
    <script type="text/javascript" src="../js/JavaScript/js_registrar_cliente.js">
    </script>
    <title>Registrar Clientes</title>
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

      <img src="../img/IClientes.png" align="left" width="50">
            <p class="Titulos"><b>Registrar Nuevo Cliente</b></p>
          <hr class="linea" >

<br>
<br>

<div style="margin-left:350px;">

  <b>Nombre:</b> <input type="text" id="Nombre">
  <br>
  <br>
  <b>Apellido:</b> <input type="text" id="apellido">
  <br>
  <br>
  <b>Telefono:</b> <input type="number" id="telefono">
  <br>
  <br>
  <b>RTN/Identidad:</b> <input type="number" id="identidad">

<br>
<br>
<label ><b>Tipo de Cliente:</b></label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="2" checked>
    <label class="form-check-label" for="exampleRadios1">
      Cliente Minorista
    </label>
  </div>
  <div class="form-check" style="margin-left:150px; margin-top:-25px;">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="1">
    <label class="form-check-label" for="exampleRadios2">
     Cliente Mayorista
  </div>
</div>




          <div style="margin-top:60px; margin-left:340px;">

              <button type="button" class="botonespconsultar" onclick="regisCliente()" name="button">Registrar</button>

          </div>








      </div>




  </body>
</html>
