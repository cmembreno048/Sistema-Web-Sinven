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

    <script type="text/javascript" src="../js/JavaScript/jscierrecaja.js">

    </script>
    <title>Cierre Caja</title>
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

      <img src="../img/ICierre.png" align="left" width="40">
            <p class="Titulos"><b>Cierre de Caja</b></p>
          <hr class="linea" >

<br>
<br>
<br>
          <div style="margin-left:100px;">
            <label style="margin-left:150px"><b>Gastos:</b></label><br>
                 <input type="text" style="width:150px; margin-left:150px" id="gastos" disabled >
     </div>

          <div style="margin-left:400px; margin-top:-63px;">

                     <label style="margin-left:70px"><b>Caja:</b></label><br>
                          <input type="text" style="width:150px; margin-left:70px" id="sumcaja" disabled >
          </div>

          <br>
          <br>


          <div style="margin-left:100px;">
            <label style="margin-left:150px"><b>Efectivo en caja:</b></label><br>
                 <input type="number" style="width:150px; margin-left:150px" id="efectivo_caja" >
     </div>
     <div style="margin-left:400px; margin-top:-63px;">

                <label style="margin-left:70px"><b>Sobrante/Faltante:</b></label><br>
                     <input type="text" style="width:150px; margin-left:70px" id="sob_fal" disabled >
     </div>
          <br>
          <br>


          <div style="margin-top:60px; margin-left:170px">
            <button type="button" class="botonespconsultar"name="button">Abrir</button>
            <button type="button" onclick="generarcaja()" class="botonespconsultar"name="button">Generar</button>
            <button type="button" onclick="cierrecajajs()" class="botonespconsultar"name="button">Guardar</button>


          </div>








      </div>




  </body>
</html>
