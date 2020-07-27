<?php
session_start();

  if ($_SESSION["newsession"] == null || $_SESSION["newsession"] == "") {
      header('Location: ../index.php');
}

include("../clases/Conexionbd.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/JavaScript/js_registrar_producto.js"></script>
  <link rel="stylesheet" href="../css/stylesmenu.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>Registrar Productos</title>
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

      <img src="../img/IProductos.png" align="left" width="40">
            <p class="Titulos"><b>Registrar Productos</b></p>
          <hr class="linea" >

<br>
<br>

<div style="margin-left:350px;">

  <b>Nombre:</b> <input type="text" id="nombre_corto" style="width:260px;">
  <br>
  <br>
  <b>Descripcion:</b> <input type="text" id="descripcion" style="width:235px;">
  <br>
  <br>
  <b>Precio Mayorista:</b> <input type="text" id="precio_may" style="width:200px;">
  <br>
  <br>
  <b>Precio Minorista:</b> <input type="text" id="precio_min" style="width:200px;">

</div>
<br>
<br>

<select class="form-control" style="width:300px; margin-left:200px;" id="categoria_prod">
  <?php

  $consultacategoria = "SELECT `secuencia_categoria_productos`,`descripcion_categoria_productos` FROM `tbl_mp_categoria_productos`";
  $todascategorias = mysqli_query($conexion, $consultacategoria);
       while ($row = mysqli_fetch_array($todascategorias))
       {
       ?>

     <option value="<?php echo $row['secuencia_categoria_productos']?>"><?php echo $row ['descripcion_categoria_productos'];?></option>

       <?php
       }
       ?>
</select>

<select class="form-control" style="width:300px; margin-left:550px; margin-top:-40px;" id="unidad_medida">
  <?php
  $cosultaunidadmedida = "SELECT `secuencia_unidad_medida_producto`,`descripcion_unidad_medida_producto` FROM `tbl_mp_unidades_de_medidas` ";
  $todasmedidas = mysqli_query($conexion, $cosultaunidadmedida);
       while ($row = mysqli_fetch_array($todasmedidas))
       {
       ?>

     <option value="<?php echo $row['secuencia_unidad_medida_producto']?>"><?php echo $row ['descripcion_unidad_medida_producto'];?></option>

       <?php
       }
       ?>
</select>

          <div style="margin-top:60px; margin-left:480px;">

            <button type="button" class="botonespconsultar"name="button" onclick="registrarprod()">Guardar</button>

          </div>








      </div>




  </body>
</html>
