
<?php
session_start();



  if ($_SESSION["newsession"] == null || $_SESSION["newsession"] == "") {
      header('Location: ../index.php');
}

?>
<!DOCTYPE html>
<html>
	<head>

		<title> Registro de empleados</title>
		<meta charset="utf-8"></head>

		<script type="text/javascript" src="../js/jquery.min.js">
		</script>
		<link rel="stylesheet" href="../css/stylesmenu.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/estilos_reporte_rangofecha.css">

	</head>
	<body>
		<div class="cuerpoRecibos" >
			<div id="reporte">
		<h1 ></h1>
		Desde: <input type="text" id="fechainicial" value="<?php echo $_SESSION['fechainicial']; ?>" disabled >
		Hasta: <input type="text" id="fechafinal" value="<?php echo $_SESSION['fechafinal'] ;?>" disabled >
		<br>
		<h5>A la Fecha: <?php echo date("Y-m-d (H:i:s)");?></h5>
		</div>
		<br><br><br>
		<table class = 'table table-hover'>
			<thead>
				<tr>
	  			<td><strong>Codigo De Factura</strong></td>
	  			<td><strong>Codigo De Producto</strong></td>
	  			<td><strong>Cantidad</strong></td>
				<td><strong>Sub-Total</strong></td>
	  		</tr>
			</thead>

			<tbody id="detalle_venta" >

				<!-- reporte por ajaxx -->
			</tbody>

		</table>
		<br><br>

</div>


<script type="text/javascript">
var fechainicial = document.getElementById('fechainicial').value;
var fechafinal = document.getElementById('fechafinal').value;

$.post("../../ajax/WSreporterangofechas.php",
	{
		"fechainicial":fechainicial,
		"fechafinal":fechafinal,


	},function(data){
		var info = JSON.parse(data);
		$('#detalle_venta').html(info.detalle);
	}


);


</script>
	</body>

</html>
