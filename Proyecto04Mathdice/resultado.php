<?php
    include_once 'lib/configuracion.php';
	include_once 'lib/juego.php';
	session_start(); 
  
 if (!isset($jugador)) {
        header('Location:index.php');
	}
	
    $calculo = $_POST['operacion'];
    $resultado = $_POST['resultado'];
    $dado1 = $_POST['dado1'];
    $dado2 = $_POST['dado2'];
    $dado3 = $_POST['dado3'];
    $dado4 = $_POST['dado4'];
    $dado5 = $_POST['dado5'];
    $total = $_POST['total'];
    $resultado = $_POST['resultado'];
    $octogono = $_POST['octogono'];
	$jugador= $_SESSION["jugador"];
	$puntuacion = $jugador->getPuntuacion();
	
	
   
	?>
	
	<html>
	<head>
		<title>Proyecto 03 </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", inistal-scale="1">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/juego.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/app.js"></script>
	</head>
	<body>
	<!--APARTADO MENÚ-->
	<nav class="navbar navbar-inverse">
		<div class ="container-fluid">
			<div class="navbar-header">
				<?php 
					//Presentamos menú.
	  				menu($menu, $lang, $jugador);
				?>
				
			</div>
		</div>
	</nav>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center">
				<div class="col-lg-4">
					<img src=<?php echo "img/dado-0".$dado1.".png"; ?> />;
				</div>
				<div class="col-lg-4">
					<img src=<?php echo "img/dado-0".$dado2.".png"; ?> />;
				</div>
				<div class="col-lg-4">
					<img src=<?php echo "img/dado-0".$dado3.".png"; ?> />;
				</div>
				<div class="col-lg-6 text-center">
					<img src=<?php echo "img/dado-0".$dado4.".png"; ?> />;
				</div>
				<div class="col-lg-6 text-center">
					<img src=<?php echo "img/dado-0".$dado5.".png"; ?> />;
				</div>
				<div class="col-lg-12">
					<div class="wrapper-images">
						<img width='100px' heigth='100px' src='img/octogono.png'/>
							<div class='texto'> <h1><strong><?php echo $octogono; ?>
							</strong></h1></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 text-left">
				<h1>RESULTADO</h1>
				<h3>TU SOLUCIÓN ES:</h3>
				<h2><?php echo $total.' = '.$resultado;  ?>  </h2>
				<?php  
					$juego = new juegoSimple($resultado,$octogono);
					$jugador-> setPuntuacion ($juego->resultado($puntuacion));
					
				?>
			</div>
					
		</div>
	</div>	
	</body>
	    
</html>
	
