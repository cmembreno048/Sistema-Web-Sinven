<?php
session_start();

  if ($_SESSION["newsession"] == null || $_SESSION["newsession"] == "") {
      header('Location: ../index.php');
}
include("clases/Conexionbd.php");
$fecha = date("y-m-d");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/sweetalert2.css">
  <link rel="stylesheet" href="css/material.min.css">
  <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="icon" href="imagenes/icono.png">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="js/material.min.js" ></script>
  <script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
  <script src="js/main.js" ></script>
</head>
<body>

  <!-- navBar -->
  <div class="full-width navBar">
    <div class="full-width navBar-options">
      <i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>
      <div class="mdl-tooltip" for="btn-menu">Menu</div>
      <nav class="navBar-options-list">
        <ul class="list-unstyle">

          <li class="btn-exit" id="btn-exit">
            <i class="zmdi zmdi-power"></i>
            <div class="mdl-tooltip" for="btn-exit">Cerrar Sesion</div>
          </li>
          <li class="text-condensedLight noLink" ><small> <?php echo $_SESSION["nombreusuario"]; ?> </small></li><!-- nombre del actual iniciado sesion-->
          <li class="noLink">
            <figure>
              <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
            </figure>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- navLateral -->
  <section class="full-width navLateral">
    <div class="full-width navLateral-bg btn-menu"></div>
    <div class="full-width navLateral-body">
      <div class="full-width navLateral-body-logo text-center tittles">
        <i class="zmdi zmdi-close btn-menu"></i> Menu Principal
      </div>
      <figure class="full-width" style="height: 77px;">
        <div class="navLateral-body-cl">
          <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
        </div>
        <figcaption class="navLateral-body-cr hide-on-tablet">
          <span>
            <?php echo $_SESSION["nombreusuario"]; ?><br><!-- nombre del actual iniciado sesion-->
            <small> <?php $tuser = $_SESSION["tipousuario"]; if ($tuser == 1) { echo "Administrador";}else{echo "Vendedor";} ?> </small><!-- privilegio del usuario-->
          </span>
        </figcaption>
      </figure>
      <div class="full-width tittles navLateral-body-tittle-menu">
        <i class="zmdi zmdi-view-list"></i><span class="hide-on-tablet">&nbsp; Herramientas</span>
      </div>
      <nav class="full-width">
        <ul class="full-width list-unstyle menu-principal">
          <li class="full-width">
            <a href="home.php" class="full-width">
              <div class="navLateral-body-cl">
                <i class="zmdi zmdi-view-dashboard"></i>
              </div>
              <div class="navLateral-body-cr hide-on-tablet">
                PRINCIPAL
              </div>
            </a>
          </li>
          <li class="full-width divider-menu-h"></li>
          <li class="full-width">
            <a href="sales.php" class="full-width">
              <div class="navLateral-body-cl">
                <i class="zmdi zmdi-shopping-cart"></i>
              </div>
              <div class="navLateral-body-cr hide-on-tablet">
                VENTAS
              </div>
            </a>
          </li>
          <li class="full-width divider-menu-h"></li>
          <li class="full-width">
            <a href="inventory.php" class="full-width">
              <div class="navLateral-body-cl">
                <i class="zmdi zmdi-shopping-cart"></i>
              </div>
              <div class="navLateral-body-cr hide-on-tablet">
                INVENTARIO
              </div>
            </a>
          </li>
          <li class="full-width divider-menu-h"></li>
          <li class="full-width">
            <a  class="full-width btn-subMenu">
              <div class="navLateral-body-cl">
                <i class="zmdi zmdi-case"></i>
              </div>
              <div class="navLateral-body-cr hide-on-tablet">
                ADMINISTRACIÓN
              </div>
              <span class="zmdi zmdi-chevron-left"></span>
            </a>
            <ul class="full-width menu-principal sub-menu-options">

                          <li class="full-width">
                            <a href="administracion.php" class="full-width">
                              <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-account"></i>
                              </div>
                              <div class="navLateral-body-cr hide-on-tablet">
                                Registrar Usuario
                              </div>
                            </a>
                          </li>




            </ul>
          </li>
          <li class="full-width divider-menu-h"></li>
          <li class="full-width">
            <a href="cierrecaja.php" class="full-width">
              <div class="navLateral-body-cl">
                <i class="zmdi zmdi-shopping-cart"></i>
              </div>
              <div class="navLateral-body-cr hide-on-tablet">
                CIERRE DE CAJA
              </div>
            </a>
          </li>
          <li class="full-width divider-menu-h"></li>
          <li class="full-width">
            <a class="full-width btn-subMenu">
              <div class="navLateral-body-cl">
                <i class="zmdi zmdi-face"></i>
              </div>
              <div class="navLateral-body-cr hide-on-tablet">
                REGISTRO
              </div>
              <span class="zmdi zmdi-chevron-left"></span>
            </a>
            <ul class="full-width menu-principal sub-menu-options">

                          <li class="full-width">
                            <a href="clientes.php" class="full-width">
                              <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-accounts"></i>
                              </div>
                              <div class="navLateral-body-cr hide-on-tablet">
                                Registrar Cliente
                              </div>
                            </a>
                          </li>
                          <li class="full-width">
                            <a href="productos.php" class="full-width">
                              <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-accounts"></i>
                              </div>
                              <div class="navLateral-body-cr hide-on-tablet">
                                Registrar Productos
                              </div>
                            </a>
                          </li>
                          <li class="full-width">
                            <a href="muestra.php" class="full-width">
                              <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-accounts"></i>
                              </div>
                              <div class="navLateral-body-cr hide-on-tablet">
                                Registrar Muestra
                              </div>
                            </a>
                          </li>
                          <li class="full-width">
                            <a href="gastos.php" class="full-width">
                              <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-accounts"></i>
                              </div>
                              <div class="navLateral-body-cr hide-on-tablet">
                                Registrar Gasto
                              </div>
                            </a>
                          </li>
            </ul>
          </li>




          <li class="full-width divider-menu-h"></li>
          <li class="full-width">
            <a href="#!" class="full-width btn-subMenu">
              <div class="navLateral-body-cl">
                <i class="zmdi zmdi-face"></i>
              </div>
              <div class="navLateral-body-cr hide-on-tablet">
                REPORTES
              </div>
              <span class="zmdi zmdi-chevron-left"></span>
            </a>
            <ul class="full-width menu-principal sub-menu-options">

                          <li class="full-width">
                            <a href="reportes.php" class="full-width">
                              <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-accounts"></i>
                              </div>
                              <div class="navLateral-body-cr hide-on-tablet">
                              reportes rango de fecha
                              </div>
                            </a>
                          </li>


            </ul>
          </li>

          <li class="full-width divider-menu-h"></li>
          <li class="full-width">
            <a href="#!" class="full-width btn-subMenu">
              <div class="navLateral-body-cl">
                <i class="zmdi zmdi-face"></i>
              </div>
              <div class="navLateral-body-cr hide-on-tablet">
                CONSULTAS
              </div>
              <span class="zmdi zmdi-chevron-left"></span>
            </a>
            <ul class="full-width menu-principal sub-menu-options">

                          <li class="full-width">
                            <a href="consultagastos.php" class="full-width">
                              <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-accounts"></i>
                              </div>
                              <div class="navLateral-body-cr hide-on-tablet">
                                Consultas de Gastos
                              </div>
                            </a>
                          </li>
                          <li class="full-width">
                            <a href="consultamuestra.php" class="full-width">
                              <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-accounts"></i>
                              </div>
                              <div class="navLateral-body-cr hide-on-tablet">
                                Consultas de muestras
                              </div>
                            </a>
                          </li>
            </ul>
          </li>

        </ul>
      </nav>
    </div>
  </section>
  <!-- pageContent -->

          <section class="full-width pageContent">
            <section class="full-width text-center" style="padding: 40px 0;"><h3 class="text-center tittles">Panel Principal</h3>
              <!-- Tiles -->
              <article class="full-width tile"><a href="consultausuarios.php">
                <div class="tile-text">
                  <span class="text-Medium">
                    <!-- conteo de Usuarios -->
                  <?php

                  $consultausuarios = "SELECT COUNT(`secuencia_usuario`) as respuesta FROM `tbl_ms_registro_usuario`";

                  $countusuarios = mysqli_query($conexion, $consultausuarios);
                  $row = mysqli_fetch_array($countusuarios);
                  echo $row["respuesta"];

                  ?>
                  <br><small>Usuarios</small>
                 </span>
                </div>	<i class="zmdi zmdi-account tile-icon"></i>
                </a>
              </article>

              <article class="full-width tile" ><a href="consultaclientes.php">
                <div class="tile-text" >
                  <span class="text-Bold Inclined" >
                    <!-- conteo de clientes -->
                  <?php

                  $consultaclientes = "SELECT COUNT(`secuencia_registro_cliente`) as respuesta FROM tbl_mc_registro_maestro_clientes";

                  $countclientes = mysqli_query($conexion, $consultaclientes);
                  $row = mysqli_fetch_array($countclientes);
                  echo $row["respuesta"];


                  ?>
                  <br>	<small>Clientes</small>
                  </span>
                </div>
                <i class="zmdi zmdi-accounts tile-icon"></i>
                </a>
              </article>


              <article class="full-width tile"><a href="inventory.php">
                <div class="tile-text"> <span class="text-Bold Inclined">
                  <!-- conteo de productos -->
                <?php

                $consultaclientes = "SELECT COUNT(`secuencia_registro_producto`) as respuesta FROM  tbl_mp_registro_maestro_productos";

                $countclientes = mysqli_query($conexion, $consultaclientes);
                $row = mysqli_fetch_array($countclientes);
                echo $row["respuesta"];


                ?>
               <br>	<small>Productos</small>
                </span>
              </div>		<i class="zmdi zmdi-mall tile-icon"></i>
              </a>
              </article>

              <article class="full-width tile">
                <div class="tile-text">
                  <span class="text-Bold Inclined">
                    <!-- conteo de ventas -->
                  <?php

                  $consultaventas = "SELECT COUNT(`secuencia_encabezado_ventas`) as respuesta FROM tbl_mv_encabezado_transaccion WHERE fecha_realizacion_ventas = '$fecha'";

                  $countventas = mysqli_query($conexion, $consultaventas);
                  $row = mysqli_fetch_array($countventas);
                  echo $row["respuesta"];


                  ?>
                  <br>	<small>Ventas Realizadas</small>
                  </span>
                	</div>
                  <i class="zmdi zmdi-shopping-cart tile-icon"></i>
              </article>

              <article class="full-width tile"><a href="consultagastos.php">
                <div class="tile-text">

                  <span class="text-Medium">

                    <!-- conteo de Gastos -->
                  <?php

                  $consultagastos = "SELECT COUNT(`secuencia_gastos`) as respuesta FROM `tbl_mv_gastos` WHERE fecha_gasto = '$fecha' ";
                  //echo $consultagastos;

                  $countgastos = mysqli_query($conexion, $consultagastos);
                  $row = mysqli_fetch_array($countgastos);
                  echo $row["respuesta"];

                  ?>
                  <br><small>Gastos</small>

                 </span>

                </div><i class="zmdi zmdi-account tile-icon"></i>

                </a>
              </article>

                  <article class="full-width tile"><a href="consultamuestra.php">
                    <div class="tile-text">

                      <span class="text-Medium">

                        <!-- conteo de muestras -->
                      <?php

                      $consultamuestra = "SELECT COUNT(`secuencia_muestra_producto`) as respuesta FROM `tbl_mv_muestras` WHERE fecha_muestra_dada = '$fecha'  ";

                      $countmuestra = mysqli_query($conexion, $consultamuestra);
                      $row = mysqli_fetch_array($countmuestra);
                      echo $row["respuesta"];

                      ?>
                      <br><small>Muestras</small>

                     </span>

                    </div>	<i class="zmdi zmdi-account tile-icon"></i>

                    </a>
                  </article>


            </section>

          </section>
        </body>
</html>
