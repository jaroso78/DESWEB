<?php
/*********************************************************
PROYECTO 01    JAVIER RODRÍGUEZ SOLER.
*********************************************************/
	include_once 'configuracion.php';
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

	<nav class="navbar navbar-inverse">
		<div class ="container-fluid">
			<div class="navbar-header">
				<?php 
					//Presentamos menú.
	  				menu($menu, $lang);
				?>
			</div>
		</nav>
	</body>
</html>