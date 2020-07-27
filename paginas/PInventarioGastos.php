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
    <link rel="stylesheet" href="../css/stylesmenu.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/JavaScript/jsgastos.js"></script>
    <title>Inventario</title>
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
    <img src="../img/IConsultarP.png" align="left" width="40">
          <p class="Titulos"><b>Gastos</b></p>
        <hr class="linea" >

    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link " href="PInventarioConsultar.php">Consultar Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="PInventarioGastos.php">Gastos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PInventarioMuestras.php">Muestras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PInventarioAñadir.php">Añadir Existencia</a>
      </li>

    </ul>

<br>
<br>
<br>

  <label style="margin-left:70px"><b>Descripcion del Gasto:</b></label>
       <input type="text" style="width:200px; margin-left:10px" id="descripcion_gasto" >

       <label style="margin-left:60px"><b>Cantidad:</b></label>
            <input type="number" style="width:200px; margin-left:10px" id="cantidad_gasto" >

            <br>
            <br>
            <br>

            <div style="margin-left: 70px">


            <label for=""><b>Tipo de Gasto</b></label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio1" value="2">
              <label class="form-check-label" for="radio1">Gasto Corriente</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio2" value="1">
              <label class="form-check-label" for="radio2">Gasto de Venta</label>
            </div>

  </div>
  <br>
  <br>
<button class="botongasto"type="button" onclick="gastos()" name="button" >Guardar</button>







    </div>






  </body>
</html>
