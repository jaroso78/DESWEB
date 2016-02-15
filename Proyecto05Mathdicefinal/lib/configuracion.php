<?php
	require_once 'jugador.php';
	session_start();
	$jugador= $_SESSION['jugador'];
 
//Definición de variables.
$lang="sp"; //Idioma.
$menu= array(  //Definición del array con el menu y submenus.
	"titulo" =>array(
		"sp"=>"Math dice",
		"en"=>"Math say" 
	),
	"portada" =>array(
		"sp"=>"Jugar",
		"en"=>"Play",
		"href" =>'pantalla_juego.php'
	),
	"instrucciones"=>array(
		"sp"=>"Instrucciones",
		"en"=>"Instrucctions",
		"href" =>"instrucciones.php"
	),
	"perfil"=>array(
		"sp"=>"Perfil",
		"en"=>"Profile",
		"href" =>"perfil.php"
	),
	"tipoJuego"=>array(
		"sp"=>"Tipo juego",
		"en"=>"Game choice",
		"submenu" =>array(
			"tipo1" => array( 
				"sp" =>"Junior",
				"en" => "Junior",
				"href"=>"pantalla_juego.php"
			),
			"tipo2" => array(
				"sp" => "Junior+",
				"en" => "Junior+",
				"href"=>"pantalla_juegoplus.php"
			)
		)	
	)
);
//Function menu para dibujar la menú.
function menu($menu, $lang, $jugador){
    foreach ($menu as $menukey => $value) { //Recorremos el array.
	    switch ($menukey) { //Clasificamos según el key.
	  	    case 'titulo': //Si es el titulo dispone de una class distinta.
	  		    echo "<a class='navbar-brand' href='#'>".$value[$lang]."</a>";
	  			echo "</div>";
	  			break;
	  		case 'portada': //Si es el Home dispone de la class activo.
	  		    echo "<div>";
	  			echo "<ul class='nav navbar-nav'>";
	  			echo "<li class ='active'><a href=".$value['href'].">".$value[$lang]."</a></li>";
	  			break;
	  		default: //El resto de menus.
			    if ($value["submenu"] == null){ //Comprobamos que no disponga de submenu.  			
	  			    echo "<li> <a href=".$value['href'].">".$value[$lang]."</a>"; //Lo dibujamos normalmente.
	  			} else{ //En caso de que disponga de submenu le damos la clase correspondiente.
	  			    echo "<li class='dropdown'> <a class='dropdown-toggle' data-toggle='dropdown' href='#'>".$value[$lang]."<span class='caret'></span></a>";
	  				echo "<ul class='dropdown-menu'>";
	  				foreach ($value["submenu"] as $submenukey =>$submenuvalue){  //Recorremos el submenu.
	  				    echo "<li> <a href=".$submenuvalue['href'].">".$submenuvalue[$lang]."</a></li>"; //Le asignamos la etiqueta correspondiente.
	  				}
	  				echo "</ul>"; //Cerramos la lista del submenu.
	  				echo "</ul>"; //Cerramos la lista del menú principal.
	  			}
	  			break;
	  	}
    }
    
    //Dibujo de la parte de menu.
    echo "	<ul class='nav navbar-nav navbar-right'>
                	<li class='dropdown'>
                    	<a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                        	<span class='glyphicon glyphicon-user'></span>
                        	<strong> Bienvenido ".$jugador." ".$jugador->getPuntuacion()." puntos</strong>
                        	<span class='glyphicon glyphicon-chevron-down'></span>
                    	</a>
                    	<ul class='dropdown-menu'>
                        	<li>
                            	<div class='navbar-login'>
                                	<div class='row'>
                                    	<div class='col-lg-12'>
                                        	<p class='text-left'><strong>".$jugador->getApellido()."</strong></p>
                                        	<p class='text-left'><strong>".$jugador->getEmail()."</strong></p>
                                        	<p class='text-left'><strong>".$jugador->getEdad()."</strong></p>
                                        </div>
                                	</div>
                            	</div>
                        	</li>
                        	<li class='divider'></li>
                        	<li>
                            	<div class='navbar-login navbar-login-session'>
                                	<div class='row'>
                                    	<div class='col-lg-12'>
                                        	<p>
                                            	<a href='#' class='btn btn-danger btn-block'  onClick= document.location.href='./destroy.php'>Cerrar</a>
                                            	
                                        	</p>
                                    	</div>
                                	</div>
                            	</div>
                        	</li>
                    	</ul>
                	</li>
            	</ul>";
}
?>