<?php
/*********************************************************
PROYECTO 03    JAVIER RODRÍGUEZ SOLER.
*********************************************************/
	include_once 'configuracion.php';
	include_once 'dado.php';
?>
<html>
	<head>
		<title>Proyecto 03 </title>
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
				<?php
					//Instanciamos el objeto  dado1 a partir de la clase dado.
				    $dado1 = new dado;
					//Ejecutamos el método dado para que nos devuelva la imagen del dado que ha salido en ese objeto en su construcción.
					$dado1 -> getdado();
				?>
			</div>
			<div class="col-xs-2">
			</div>
			<div class="col-xs-2">
					<?php
					//Instanciamos el objeto  dado2 a partir de la clase dado.
					$dado2 = new dado;
						//Ejecutamos el método dado para que nos devuelva la imagen del dado que ha salido en ese objeto en su construcción.
					$dado2 -> getdado();
				?>
			</div>
			<div clas="col-xs-8">
				<!--FORMULARIO CON MÉTODO POST QUE NOS REMITE A RESULTADO.PHP-->
				<form  class="form" role="form" name="formulario" method="POST" action="resultado.php">
				 	<div class="form-group">
    					<label for="dado1">Dado nº1</label>
    					<input type="text" id="dado1" name="dado1" placeholder="Introduce un valor del 1 al 6"/>
  					</div>
  					<div class="radio">
  						<label>
   							<input type="radio" name="opciones" id="opciones_1" value="+" checked>
    						+
 						</label>
					</div>
					<div class="radio">
  						<label>
    						<input type="radio" name="opciones" id="opciones_2" value="-">
    						-
  							</label>
					</div>
  					<div class="form-group">
    					<label for="dado2">Dado nº2</label>
    					<input type="text" id="dado2" name="dado2" placeholder="Introduce un valor del 1 al 6"/>
    						
  					</div>
  					
  					<!--INPUTS OCULTO QUE ALMACENAMOS LOS VALORES DE LOS DADOS MEDIANTE EL METODO GETDADOVALUE() -->
  					<input type="hidden" name="dado1_aleatorio" value=<?php  echo $dado1->getdadovalue();?> />
					<input type="hidden" name="dado2_aleatorio" value=<?php  echo $dado2->getdadovalue();?> />
  					<div class="col-xs-6"></div>
  					<div class="form-group">
    				  <button type="submit" class="btn btn-default">Entrar</button>
  					</div>
  				
				</form>
			</div>
		</div>
	</body>
</html>