<?php
session_start();

include("../clases/Conexionbd.php");

  if ($_SESSION["newsession"] == null || $_SESSION["newsession"] == "") {
      header('Location: ../index.php');
}

include("../clases/Conexionbd.php");
$consultarprod = "select Secuencia_Registro_Producto, Descripcion_Producto from TBL_MP_REGISTRO_MAESTRO_PRODUCTOS";

$todosproductos = mysqli_query($conexion, $consultarprod);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/stylesmenu.css">
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
          <p class="Titulos"><b>Muestras</b></p>
        <hr class="linea" >

    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="PInventarioConsultar.php">Consultar Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PInventarioGastos.php">Gastos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="PInventarioMuestras.php">Muestras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PInventarioAñadir.php">Añadir Existencia</a>
      </li>
    </ul>
<br>
<br>
<br>
<div style="margin-left:100px;">
  <label style="margin-left:100px"><b>Productos:</b></label><br>

  <select class="ls"style="width:350px;" id="productos" >
    <?php
         while ($row = mysqli_fetch_array($todosproductos))
         {
         ?>

       <option value="<?php echo $row['Secuencia_Registro_Producto']?>"><?php echo $row ['Descripcion_Producto'];?></option>

         <?php
         }
         ?>
</div>

<div style="margin-left:490px; margin-top:-63px;">
           <label style="margin-left:70px"><b>Cantidad a Rebajar:</b></label><br>
            <input type="number" style="width:150px; margin-left:70px"id="cantidad_rebajar" >

</div>

<br>
<br>


<div style="margin-top:60px; margin-left:600px">
  <button type="button" class="bt1"name="button" onclick="ingresarmuestra()">Guardar</button>

</div>


  </body>
</html>
