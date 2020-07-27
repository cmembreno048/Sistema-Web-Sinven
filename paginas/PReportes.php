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
    <script type="text/javascript" src="../js/JavaScript/jscierrecaja.js"></script>
    <script type="text/javascript" src="../js/JavaScript/js_reportes.js"></script>
    <title>Reportes</title>
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

      <img src="../img/IReportes.png" align="left" width="40">
            <p class="Titulos"><b>Reportes</b></p>
          <hr class="linea" >

<br>

<div >
    <label style="color: #004E63; margin-left:50px;"><b>Reporte por Rango de Fecha</b></label>
    <br>
    <br>
    <div >
        <label style="margin-left:60px;">Desde: AÑO-MES-DIA</label>
    </div>
    <input style="margin-top:-200px; margin-left:50px;"type="text" id="rango_desde">

    <br>

</div>
<br>
<br>
<br>
<br>

<div style="margin-top:-157px; margin-left:250px;"class="">

  <label style="margin-left:60px;">Hasta: AÑO-MES-DIA</label>
  <br>
  <input style="margin-left:50px;"type="text" id="rango_hasta" >

</div>
<div style="margin-left:500px; margin-top:-30px;" class="">
  <button type="button" class="botonespconsultar" onclick="generarreportefechas()" name="button">Generar Reporte</button>
</div>
<br>
<br>

<div >
  <label style="color:#004E63; margin-left:50px;"> <b>Reporte por Mes</b></label>
  <br>
  <button style="margin-left:400px; margin-top:10px;"type="button"  class="botonespconsultar"name="button">Generar Reporte</button>
  <select class="form-control" style="width:300px; margin-left:50px; margin-top:-35px;">
    <option>Mes</option>
  </select>
</div>
<br>
<br>
<div >
  <label style="color:#004E63; margin-left:50px;"> <b>Reporte Anual</b></label>
  <br>
  <button style="margin-left:400px; margin-top:10px;"type="button" class="botonespconsultar"name="button">Generar Reporte</button>
  <select class="form-control" style="width:300px; margin-left:50px; margin-top:-35px;">
    <option>Año</option>
  </select>
</div>


      </div>




  </body>
</html>
