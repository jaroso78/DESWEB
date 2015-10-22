<?php
/*********************************************************
PROYECTO 02    JAVIER RODRÍGUEZ SOLER.
*********************************************************/
	include_once 'configuracion.php';
	include_once 'dado.php';
?>
<html>
	<head>
		<title>Proyecto 02 </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", inistal-scale="1">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
	<!--APARTADO MENÚ-->
	<nav class="navbar navbar-inverse">
		<div class ="container-fluid">
			<div class="navbar-header">
				<?php 
					//Presentamos menú.
	  				menu($menu, $lang);
				?>
		</div>
	</nav>
	<!--COLOCACIÓN DE LAS IMÁGENES EN PANTALLA-->
	<div class="container">
		<div class="row">
			<div class="col-xs-2">
				<img src="img\dado-01.png"/>
			</div>
			<div class="col-xs-2">
				<img src="img\dado-02.png"/>
			</div>
			<div class="col-xs-2">
				<img src="img\dado-03.png"/>
			</div>
			<div class="col-xs-2">
				<img src="img\dado-04.png"/>
			</div>
			<div class="col-xs-2">
				<img src="img\dado-05.png"/>
			</div>
			<div class="col-xs-2">
				<img src="img\dado-06.png"/>
			</div>
		</div>
	</div>
	<!--COLOCAR BOTON Y SALIDA DEL RESULTADO -->
	<div class="container">
		<div class="row">
			<div class="col-xs-2">
				<h4>Dado aleatorio.</h4>
			</div>
			<div class="col-xs-2">
				<?php
					//EJECUTAMOS LA FUNCIÓN DADO PARA LANZAR EL LANZAMIENTO Y EL DIBUJO DEL DADO.
					dado();
				?>
			</div>
		<div>
	</div>
	</body>
</html>