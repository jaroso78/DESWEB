<?php
/*********************************************************
PROYECTO 01    JAVIER RODRÍGUEZ SOLER.
*********************************************************/
//Definición de variables.
$lang="en"; //Idioma.
$menu= array(  //Definición del array con el menu y submenus.
	"titulo" =>array(
		"sp"=>"Math dado",
		"en"=>"Math day" 
	),
	"portada" =>array(
		"sp"=>"Inicio",
		"en"=>"Home"
	),
	"instrucciones"=>array(
		"sp"=>"Instrucciones",
		"en"=>"Instrucctions"
	),
	"tipoJuego"=>array(
		"sp"=>"Tipo juego",
		"en"=>"Game choice",
		"submenu" =>array(
			"tipo1" => array( 
				"sp" =>"Juego Tradicional",
				"en" => "Traditional game",
			),
			"tipo2" => array(
				"sp" => "Juego modificado",
				"en" => "Game modified",
			),
			"tipo3" => array(
				"sp" => "Juego niños",
				"en" => "kid game" ,
			)
		)	
	)
)
?>
<html>
	<head>
		<title>Proyecto 01 </title>
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
	  				foreach ($menu as $menukey => $value) { //Recorremos el array.
	  					switch ($menukey) { //Clasificamos según el key.
	  						case 'titulo': //Si es el titulo dispone de una class distinta.
	  							echo "<a class='navbar-brand' href='#'>".$value[$lang]."</a>";
	  							echo "</div>";
	  						break;
	  			  			case 'portada': //Si es el Home dispone de la class activo.
	  							echo "<div>";
	  							echo "<ul class='nav navbar-nav'>";
	  							echo "<li class ='active'><a href='#'>".$value[$lang]."</a></li>";
	  						break;
	  						default: //El resto de menus.
								if ($value["submenu"] == null){ //Comprobamos que no disponga de submenu.  			
	  								echo "<li> <a href='#'>".$value[$lang]."</a>"; //Lo dibujamos normalmente.
	  							} else{ //En caso de que disponga de submenu le damos la clase correspondiente.
	  								echo "<li class='dropdown'> <a class='dropdown-toggle' data-toggle='dropdown' href='#'>".$value[$lang]."<span class='caret'></span></a>";
	  								echo "<ul class='dropdown-menu'>";
	  								foreach ($value["submenu"] as $submenukey =>$submenuvalue){  //Recorremos el submenu.
	  									echo "<li> <a href='#'>".$submenuvalue[$lang]."</a></li>"; //Le asignamos la etiqueta correspondiente.
	  								}
	  								echo "</ul>"; //Cerramos la lista del submenu.
	  								echo "</ul>"; //Cerramos la lista del menú principal.
	  							}
	  						break;
	  					}
					}
				?>
			</div>
		</nav>
	</body>
</html>