<?php
session_start();

  if ($_SESSION["newsession"] == null || $_SESSION["newsession"] == "") {
      header('Location: ../index.php');
}

include("../clases/Conexionbd.php");
$consultarprod = "SELECT Secuencia_Registro_Producto,Descripcion_Producto,Precio_Mayorista,Precio_Minorista,Existencia_Actual 
                FROM TBL_MP_REGISTRO_MAESTRO_PRODUCTOS";

$todosproductos = mysqli_query($conexion, $consultarprod);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/stylesmenu.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min">
    </script>
    <script type="text/javascript" src="js/jquery.min.js">
    </script>
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

          <p class="Titulos"><b>Consultar Productos</b></p>
        <hr class="linea" >

    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Consultar Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PInventarioGastos.php">Gastos</a>
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

<input class="form-control" type="text" style="width:400px; margin-left:300px; margin-top:-20px;" placeholder="Producto" >
<button type="button" style="margin-left:720px;  "class="sa"name="button">Buscar</button>

<div class="ex1">



    <table class="table">

  <thead>
    <tr>
      <th scope="col">Codigo Producto</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio Mayorista</th>
      <th scope="col">Precio Minorista</th>
      <th scope="col">Existencia Actual</th>
    </tr>
  </thead>
  <?php while ($row = mysqli_fetch_array($todosproductos)) {
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row["Secuencia_Registro_Producto"]; ?></th>
      <td><?php echo $row["Descripcion_Producto"]; ?></td>
      <td><?php echo $row["Precio_Mayorista"]; ?></td>
      <td><?php echo $row["Precio_Minorista"]; ?></td>
      <td><?php echo $row["Existencia_Actual"]; ?></td>
    <?php } ?>
    </tr>
    <tr>

  </tbody>

</table>
</div>

<br>


</div>



    </div>


  </body>
</html>
