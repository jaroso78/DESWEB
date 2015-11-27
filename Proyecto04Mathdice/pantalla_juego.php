<?php
/*********************************************************
PROYECTO 03    JAVIER RODRÍGUEZ SOLER.
*********************************************************/
	include_once 'lib/configuracion.php';
	include_once 'lib/juego.php';
	header('Content-Type:text/html;charset=utf-8'); //Codificación de los acentos.
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
	<!--COLOCACIÓN DE LAS IMÁGENES EN PANTALLA-->
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center">
				<div class="col-lg-4">
				<?php
					//Instanciamos el objeto  dado1 a partir de la clase dado.
				    $dado1 = new dado3;
					//Ejecutamos el método dado para que nos devuelva la imagen del dado que ha salido en ese objeto en su construcción.
					$dado1 -> getdado();
					?>
				</div>
				<div class="col-lg-4">
					<?php
					//Instanciamos el objeto  dado2 a partir de la clase dado.
					$dado2 = new dado3;
						//Ejecutamos el método dado para que nos devuelva la imagen del dado que ha salido en ese objeto en su construcción.
					$dado2 -> getdado();
					?>
				</div>
				<div class="col-lg-4">
					<?php
					//Instanciamos el objeto  dado2 a partir de la clase dado.
					$dado3 = new dado3;
						//Ejecutamos el método dado para que nos devuelva la imagen del dado que ha salido en ese objeto en su construcción.
					$dado3 -> getdado();
					?>
				</div>
				<div class="col-lg-6 text-center">
						<?php
						//Instanciamos el objeto  dado1 a partir de la clase dado.
				    	$dado4 = new dado6;
						//Ejecutamos el método dado para que nos devuelva la imagen del dado que ha salido en ese objeto en su construcción.
						$dado4 -> getdado();
						?>
					</div>
					<div class="col-lg-6 text-center">
						<?php
						//Instanciamos el objeto  dado2 a partir de la clase dado.
						$dado5 = new dado6;
						//Ejecutamos el método dado para que nos devuelva la imagen del dado que ha salido en ese objeto en su construcción.
						$dado5 -> getdado();
						?>
					</div>
					<div class="col-lg-12">
						<div class="wrapper-images">
							<img width='100px' heigth='100px' src='img/octogono.png'/>
							<div class='texto'> <h1><strong>
								<?php $dado6 = new dado8;
								echo $dado6 -> getdado();
								?>
							</strong></h1></div>
						</div>
					</div>
				<div class="col-lg-6 text-center">
						<img width='100px' heigth='100px' src='img/+.png' class='operacion' value="+"/>
					</div>
					<div class="col-lg-6 text-center">
						<img width='100px' heigth='100px' src='img/-.png' class='operacion' value="-"/>
					</div>
			</div>
			<div clas="col-lg-6">
				<div class="row">
					<div class="col-lg-6 text-center">
						<div class="col-lg-12" id="jugada"></div>
					</div>
					<div class="col-lg-6 text-center">
						<form  class="form" role="form" name="formulario" method="post" action="resultado.php">
				 			<div class="form-group">
    				  			<input type="hidden" name="dado1" value=<?php echo $dado1-> getdadovalue()?> />
								<input type="hidden" name="dado2" value=<?php echo $dado2-> getdadovalue()?> />
								<input type="hidden" name="dado3" value=<?php echo $dado3-> getdadovalue()?> />
								<input type="hidden" name="dado4" value=<?php echo $dado4-> getdadovalue()?> />
								<input type="hidden" name="dado5" value=<?php echo $dado5-> getdadovalue()?> />
								<input type="hidden" name="octogono" value=<?php echo $dado6-> getdado()?> />
								<input type="hidden" name="operacion1" value="" />
				    			<input type="hidden" name="operacion2" value="" />
				    			<input type="hidden" name ="total" value="" />
				    			<input type="hidden" name="resultado" value="" />
				    			<!--input type="hidden" id="resultado" name="resultado"  value="<?php //echo $dado6 -> getdado();?>" --/>
				    			<input type="text" id="puntos" value="0" />
				    		</div>
				    		<!--div class='btn btn-success btn-lg btn-block oculto' id='calcular' data-role='button'>Jugar</div-->
				    		<div class="col-lg-12" id="btn-jugada"></div>
						</form>
					</div>
				</div>
						</div>
				
		</div>
			
				
		</div>
	</body>
</html>