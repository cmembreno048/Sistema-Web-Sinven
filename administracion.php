<?php
session_start();

  if ($_SESSION["newsession"] == null || $_SESSION["newsession"] == "") {
      header('Location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administracion</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
  <link rel="icon" href="imagenes/icono.png">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>


</head>
	<body>

		<!-- navBar -->
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

	<section class="full-width pageContent">		<section class="full-width header-well">			<div class="full-width header-well-icon">				<i class="zmdi zmdi-account"></i>			</div>			<div class="full-width header-well-text">				<p class="text-condensedLight">					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aut nulla accusantium minus corporis accusamus fuga harum natus molestias necessitatibus.				</p>			</div>		</section>		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">			<div class="mdl-tabs__tab-bar">				<a href="#tabNewAdmin" class="mdl-tabs__tab is-active">NEW</a>				<a href="#tabListAdmin" class="mdl-tabs__tab">LIST</a>			</div>			<div class="mdl-tabs__panel is-active" id="tabNewAdmin">				<div class="mdl-grid">					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">						<div class="full-width panel mdl-shadow--2dp">							<div class="full-width panel-tittle bg-primary text-center tittles">								New Administrator							</div>							<div class="full-width panel-content">								<form>									<div class="mdl-grid">										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">											<h5 class="text-condensedLight">Data Administrator</h5>											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">												<input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="DNIAdmin">												<label class="mdl-textfield__label" for="DNIAdmin">DNI</label>												<span class="mdl-textfield__error">Invalid number</span>											</div>											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin">												<label class="mdl-textfield__label" for="NameAdmin">Name</label>												<span class="mdl-textfield__error">Invalid name</span>											</div>											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameAdmin">												<label class="mdl-textfield__label" for="LastNameAdmin">Last Name</label>												<span class="mdl-textfield__error">Invalid last name</span>											</div>											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">												<input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="phoneAdmin">												<label class="mdl-textfield__label" for="phoneAdmin">Phone</label>												<span class="mdl-textfield__error">Invalid phone number</span>											</div>											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">												<input class="mdl-textfield__input" type="email" id="emailAdmin">												<label class="mdl-textfield__label" for="emailAdmin">E-mail</label>												<span class="mdl-textfield__error">Invalid E-mail</span>											</div>											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">												<input class="mdl-textfield__input" type="text" id="addressAdmin">												<label class="mdl-textfield__label" for="addressAdmin">Address</label>												<span class="mdl-textfield__error">Invalid address</span>											</div>										</div>										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">											<h5 class="text-condensedLight">Account Details</h5>											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ]*(\.[0-9]+)?" id="UserNameAdmin">												<label class="mdl-textfield__label" for="UserNameAdmin">User Name</label>												<span class="mdl-textfield__error">Invalid user name</span>											</div>											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">												<input class="mdl-textfield__input" type="password" id="passwordAdmin">												<label class="mdl-textfield__label" for="passwordAdmin">Password</label>												<span class="mdl-textfield__error">Invalid password</span>											</div>											<h5 class="text-condensedLight">Choose Avatar</h5>											<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">												<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="avatar-male.png">												<img src="assets/img/avatar-male.png" alt="avatar" style="height: 45px; width="45px;" ">												<span class="mdl-radio__label">Avatar 1</span>											</label>											<br><br>											<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">												<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="avatar-female.png">												<img src="assets/img/avatar-female.png" alt="avatar" style="height: 45px; width="45px;" ">												<span class="mdl-radio__label">Avatar 2</span>											</label>											<br><br>											<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">												<input type="radio" id="option-3" class="mdl-radio__button" name="options" value="avatar-male2.png">												<img src="assets/img/avatar-male2.png" alt="avatar" style="height: 45px; width="45px;" ">												<span class="mdl-radio__label">Avatar 3</span>											</label>											<br><br>											<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">												<input type="radio" id="option-4" class="mdl-radio__button" name="options" value="avatar-female2.png">												<img src="assets/img/avatar-female2.png" alt="avatar" style="height: 45px; width="45px;" ">												<span class="mdl-radio__label">Avatar 4</span>											</label>										</div>									</div>									<p class="text-center">										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addAdmin">											<i class="zmdi zmdi-plus"></i>										</button>										<div class="mdl-tooltip" for="btn-addAdmin">Add Administrator</div>									</p>								</form>							</div>						</div>					</div>				</div>			</div>			<div class="mdl-tabs__panel" id="tabListAdmin">				<div class="mdl-grid">					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">						<div class="full-width panel mdl-shadow--2dp">							<div class="full-width panel-tittle bg-success text-center tittles">								List Administrator							</div>							<div class="full-width panel-content">								<form action="#">									<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">										<label class="mdl-button mdl-js-button mdl-button--icon" for="searchAdmin">											<i class="zmdi zmdi-search"></i>										</label>										<div class="mdl-textfield__expandable-holder">											<input class="mdl-textfield__input" type="text" id="searchAdmin">											<label class="mdl-textfield__label"></label>										</div>									</div>								</form>								<div class="mdl-list">									<div class="mdl-list__item mdl-list__item--two-line">										<span class="mdl-list__item-primary-content">											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>											<span>1. Administrator name</span>											<span class="mdl-list__item-sub-title">DNI</span>										</span>										<a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>									</div>									<li class="full-width divider-menu-h"></li>									<div class="mdl-list__item mdl-list__item--two-line">										<span class="mdl-list__item-primary-content">											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>											<span>2. Administrator name</span>											<span class="mdl-list__item-sub-title">DNI</span>										</span>										<a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>									</div>									<li class="full-width divider-menu-h"></li>									<div class="mdl-list__item mdl-list__item--two-line">										<span class="mdl-list__item-primary-content">											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>											<span>3. Administrator name</span>											<span class="mdl-list__item-sub-title">DNI</span>										</span>										<a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>									</div>									<li class="full-width divider-menu-h"></li>									<div class="mdl-list__item mdl-list__item--two-line">										<span class="mdl-list__item-primary-content">											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>											<span>4. Administrator name</span>											<span class="mdl-list__item-sub-title">DNI</span>										</span>										<a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>									</div>									<li class="full-width divider-menu-h"></li>									<div class="mdl-list__item mdl-list__item--two-line">										<span class="mdl-list__item-primary-content">											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>											<span>5. Administrator name</span>											<span class="mdl-list__item-sub-title">DNI</span>										</span>										<a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>									</div>								</div>							</div>						</div>					</div>				</div>			</div>		</div>	</section></body></html>
