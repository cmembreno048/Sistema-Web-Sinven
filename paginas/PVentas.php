<?php
session_start();

  if ($_SESSION["newsession"] == null || $_SESSION["newsession"] == "") {
      header('Location: ../index.php');
}

include("../clases/Conexionbd.php");
include("../clases/Ventas.php");

$objeliminar = new Ventas();
$objeliminar->eliminartabladetalletemp($conexion);

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
    <script type="text/javascript" src="../js/JavaScript/js_ventas.js" ></script>
    <script type="text/javascript" src="../js/JavaScript/js_eventos_ventas.js" ></script>
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
    <img src="../img/IVentas.png" align="left" width="47">
          <p class="Titulos"><b>Ventas</b></p>
        <hr class="linea" >
<br>


<label style="margin-left:30px;">Codigo:</label>
  <input  type="text" id="cod_producto" style="width:150px; margin-left:5px; margin-top:-35px">
<div style="margin-top:-30px;">
    <label style="margin-left:300px; margin-top:-10px;">Cliente:</label>
    <input type="text" name="" value="" style=" width:150px; margin-left:5px; margin-top:-35px;">


</div>

<div class="form-check" style="margin-left:530px; margin-top:-30px;">
  <input  type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
  <label class="form-check-label" for="exampleRadios1">
    Cliente Final
  </label>
</div>


  <div style="margin-top:20px;">
    <button type="button" class="botoneslibres"name="button" onclick="cargar_producto()" style="margin-left:90px; ">Buscar</button>
      <button type="button" class="botoneslibres"name="button" onclick="" style="margin-left:150px; ">Agregar</button>
  </div>


<br>
<br>

  <label style="margin-left:30px;">Producto:</label>
    <input type="text" id="nombre_producto" style="width:150px; margin-left:5px; margin-top:-35px" disabled>
  <div style="margin-top:-30px;">
      <label style="margin-left:300px; margin-top:-10px;" >Cantidad:</label>
      <input type="text" id="cantidad" style="width:150px; margin-left:5px; margin-top:-35px;">
  </div>

  <div style="margin-top:-30px;">
      <button type="button" class="botoneslibres" name="button" onclick="cargar_dato()" style="margin-left:560px; ">Agregar</button>
  </div>


<br>

<div class="tabla2">

  <table class="table" >

<thead>
  <tr>
    <th scope="col">Codigo de Producto</th>
    <th scope="col">Descripcion de Producto</th>
    <th scope="col">Precio Unitario</th>
    <th scope="col">Cantidad</th>
    <th scope="col">Total</th>
    <th scope="col">Accion</th>

  </tr>
</thead>
<tbody id="detalle_venta">

      <!-- CONTENIDO AJAX -->

</tbody>

</table>

</div>

<div style="margin-left:430px; margin-top:13px;">
  <label for="">Total:</label>
  <label style="margin-left:55px;">Efectivo:</label>
  <label style="margin-left:40px;">Cambio:</label>
</div>

<div style="margin-left:400px;">
  <input style="width:100px;" id="Total"type="number" disabled>
  <input style="width:100px;" id="efectivo" type="text" onkeypress="generarvuelto(event)" >
<input style="width:100px;" id="vuelto" type="number" name="" value="">
</div>




<div style="margin-top:-35px; margin-left:50px;">
  <button type="button" class="botoneslibres" onclick="cargarfacturafinal()"  style="margin-left:30px; ">Facturar</button>
</div>
</div>


  </body>
</html>
