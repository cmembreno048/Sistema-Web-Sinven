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
    <link rel="stylesheet" href="/css/stylesmenu.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min">
    </script>
    <script type="text/javascript" src="js/jquery.min.js">
    </script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="menu">


      <br>
      <br>
      <br>
      <br>

        <button class="botones"type="submit"><img src="../img/BVentas.png" align="left" width="30">          Ventas</button>
        <button class="botones"type="submit"><img src="../img/BInventario.png" align="left" width="30">          Inventario</button>
        <button class="botones"type="submit"><img src="../img/BProductos.png" align="left" width="30">          Productos</button>
        <button class="botones"type="submit"><img src="../img/BCierrecaja.png" align="left" width="30">        Cierre de Caja</button>
        <button class="botones"type="submit"><img src="../img/BUsuarios.png" align="left" width="30">          Usuarios</button>
        <button class="botones"type="submit"><img src="../img/BClientes.png" align="left" width="30">        Clientes</button>
        <button class="botones"type="submit"><img src="../img/BReportes.png" align="left" width="30">        Reportes</button>
        <button class="botones"type="submit"><img src="../img/BCerrarsesion.png" align="left" width="30">        Cerrar Sesion</button>

    </div>

    <div class="barra">


      <p class="p">HACIENDA PUEBLO VIEJO</p>

    </div>




  </body>
</html>
