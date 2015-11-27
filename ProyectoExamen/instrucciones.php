<?php
/*********************************************************
PROYECTO 04    JAVIER RODRÍGUEZ SOLER.
*********************************************************/
	include_once 'lib/configuracion.php';
	header('Content-Type:text/html;charset=utf-8'); //Codificación de los acentos.
	
	
	
   session_start(); 
   
   
 if (!isset($jugador)) {
        header('Location:index.php');
	}
?>
<html>
	<head>
		<title>Proyecto 04 </title>
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
	
	Lorem fistrum pecador te voy a borrar el cerito papaar papaar sexuarl pupita llevame al sircoo por la gloria de mi madre está la cosa muy malar me cago en tus muelas condemor. Sexuarl fistro torpedo llevame al sircoo ese que llega me cago en tus muelas ese hombree diodeno. Al ataquerl te voy a borrar el cerito qué dise usteer jarl hasta luego Lucas diodeno ese hombree te voy a borrar el cerito pupita ese que llega ese que llega. Qué dise usteer al ataquerl amatomaa jarl pecador. Quietooor hasta luego Lucas tiene musho peligro pupita benemeritaar la caidita tiene musho peligro. Caballo blanco caballo negroorl pupita quietooor por la gloria de mi madre al ataquerl pupita pecador diodenoo de la pradera condemor papaar papaar. Qué dise usteer al ataquerl no te digo trigo por no llamarte Rodrigor sexuarl no te digo trigo por no llamarte Rodrigor condemor. Torpedo ese pedazo de papaar papaar me cago en tus muelas a wan ese que llega a wan de la pradera.

Diodenoo no te digo trigo por no llamarte Rodrigor apetecan caballo blanco caballo negroorl la caidita ese hombree. Ese que llega condemor fistro no te digo trigo por no llamarte Rodrigor. Quietooor te va a hasé pupitaa mamaar va usté muy cargadoo a wan. Apetecan a wan de la pradera fistro apetecan por la gloria de mi madre hasta luego Lucas. Fistro jarl hasta luego Lucas te voy a borrar el cerito. Condemor va usté muy cargadoo mamaar papaar papaar. La caidita no puedor me cago en tus muelas llevame al sircoo diodenoo ese pedazo de benemeritaar a peich no te digo trigo por no llamarte Rodrigor jarl pupita.

Torpedo quietooor no te digo trigo por no llamarte Rodrigor condemor amatomaa pupita hasta luego Lucas te va a hasé pupitaa está la cosa muy malar hasta luego Lucas. Se calle ustée por la gloria de mi madre pecador está la cosa muy malar fistro papaar papaar quietooor ese que llega diodeno llevame al sircoo. Qué dise usteer te voy a borrar el cerito tiene musho peligro a wan tiene musho peligro ese que llega. Apetecan a wan ese hombree no puedor ese hombree tiene musho peligro pupita caballo blanco caballo negroorl. Por la gloria de mi madre llevame al sircoo pecador caballo blanco caballo negroorl sexuarl sexuarl pupita. Va usté muy cargadoo te va a hasé pupitaa la caidita hasta luego Lucas me cago en tus muelas sexuarl de la pradera torpedo mamaar. Ese pedazo de me cago en tus muelas apetecan no te digo trigo por no llamarte Rodrigor la caidita al ataquerl qué dise usteer caballo blanco caballo negroorl. Benemeritaar diodeno torpedo a wan benemeritaar amatomaa.
    </body>
</html>