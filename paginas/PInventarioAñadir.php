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
      <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/JavaScript/jsmuestra.js" ></script>
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
    <img src="../img/IConsultarP.png" align="left" width="40">
          <p class="Titulos"><b>Añadir Existencia</b></p>
        <hr class="linea" >

    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="PInventarioConsultar.php">Consultar Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PInventarioGastos.php">Gastos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PInventarioMuestras.php">Muestras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="PInventarioAñadir.php">Añadir Existencia</a>
      </li>
    </ul>
<br>
<div>

  <input class="form-control" type="text" placeholder="Producto" style="width:500px; margin-left:200px;">
  <div style="margin-top:-35px;">
    <button type="button" class="botoneslibres"name="button" onclick="" style="margin-left:710px; ">Buscar</button>
  </div>


</div>
<br>

<div class="tabla2">

  <table class="table">

<thead>
  <tr>
    <th scope="col">Codigo de Producto</th>
    <th scope="col">Nombre de Producto</th>
    <th scope="col">Existencia Actual</th>

  </tr>
</thead>
<tbody>


</tbody>

</table>

</div>

<br>
<br>

  <input class="form-control" type="text" placeholder="Producto a Aumentar" style="width:500px; margin-left:200px;">
  <div style="margin-top:-35px;">
    <button type="button" class="botoneslibres"name="button" onclick="" style="margin-left:710px; ">Actualizar</button>
  </div>




  </body>
</html>
