
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="icon" href="imagenes/icono.png">
	<link rel="stylesheet" href="css/fondo_Imagen_login.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
	</script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>') 
	</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
	<script src="js/JavaScript/jsrecuperarcontraseña.js" ></script>
</head>
<body >
	<div class="container-login" >
		<p class="text-center" style="font-size: 80px;">
		
<i class="zmdi zmdi-email-open"></i>		</p>
<h4 class="text-center text-condensedLight" > Recuperacion de contraseña por correo </h4>
		<form>

			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="usuariorec" >
				<label class="mdl-textfield__label" for="usuariorec">Usuario</label>
				
			</div>

			<center> <h5 id="alerta" class="alerta_recuperacion"></h5> </center>
			
			 <center><button type="button" onclick="verificarusuario()" class="mdl-button mdl-js-button mdl-js-ripple-effect"
					style=" background-color: #71C5FC; float:rigt;"name="button"> Enviar Correo  </button></center>
					<br>

		</form>

	</div>
	
</body>
<script type="text/javascript">
		$('.mdl-textfield__input').keypress( function(e){

				if (e.keyCode == 13 ) {
				ValidarInicoSesion();
				}
				
		});
</script>

</html>
