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
	<title>Clients</title>
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
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-accounts"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aut nulla accusantium minus corporis accusamus fuga harum natus molestias necessitatibus.
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabNewClient" class="mdl-tabs__tab is-active">NEW</a>
				<a href="#tabListClient" class="mdl-tabs__tab">LIST</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewClient">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								New client
							</div>
							<div class="full-width panel-content">
								<form>
									<h5 class="text-condensedLight">Data client</h5>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="DNIClient">
										<label class="mdl-textfield__label" for="DNIClient">DNI</label>
										<span class="mdl-textfield__error">Invalid number</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameClient">
										<label class="mdl-textfield__label" for="NameClient">Name</label>
										<span class="mdl-textfield__error">Invalid name</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameClient">
										<label class="mdl-textfield__label" for="LastNameClient">Last Name</label>
										<span class="mdl-textfield__error">Invalid last name</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="addressClient1">
										<label class="mdl-textfield__label" for="addressClient1">Address 1</label>
										<span class="mdl-textfield__error">Invalid address</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="addressClient2">
										<label class="mdl-textfield__label" for="addressClient2">Address 2</label>
										<span class="mdl-textfield__error">Invalid address</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="phoneClient">
										<label class="mdl-textfield__label" for="phoneClient">Phone</label>
										<span class="mdl-textfield__error">Invalid phone number</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="email" id="emailClient">
										<label class="mdl-textfield__label" for="emailClient">E-mail</label>
										<span class="mdl-textfield__error">Invalid E-mail</span>
									</div>
									<p class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addClient">
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addClient">Add client</div>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mdl-tabs__panel" id="tabListClient">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								List Clients
							</div>
							<div class="full-width panel-content">
								<form action="#">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
										<label class="mdl-button mdl-js-button mdl-button--icon" for="searchClient">
											<i class="zmdi zmdi-search"></i>
										</label>
										<div class="mdl-textfield__expandable-holder">
											<input class="mdl-textfield__input" type="text" id="searchClient">
											<label class="mdl-textfield__label"></label>
										</div>
									</div>
								</form>
								<div class="mdl-list">
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>1. Client name</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
									</div>
									<li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>2. Client name</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
									</div>
									<li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>3. Client name</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
									</div>
									<li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>4. Client name</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
									</div>
									<li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>5. Client name</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
									</div>
									<li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>6. Client name</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
									</div>
									<li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>7. Client name</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
