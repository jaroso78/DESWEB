<?php
 	

/*********************************************************
PROYECTO 03    JAVIER RODRÍGUEZ SOLER.
*********************************************************/
	 
	include_once 'lib/configuracion.php';
	include_once 'lib/juego.php';
	header('Content-Type:text/html;charset=utf-8'); //Codificación de los acentos.
	
	
    session_start();
	$jugador  = $_SESSION["jugador"];
	if (!isset($jugador)) {
        header('Location:index.php');
	}
	
	
?> 
 
 <html>
	<head>
		<title>PERFIL </title>
		<meta charset="encoding">
		<meta name="viewport" content="width=device-width", inistal-scale="1">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/app.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/login.js"></script>
	</head>
	<body>
 
        <body>
            <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <h4><strong>Por favor introduce tus datos</strong></h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form accept-charset="UTF-8" role="form" class="form-signin" method="POST" action="lib/auth.php">
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Nombre" name="name" type="text" value=<?php echo $jugador -> getNombre();?> >
                                        <input class="form-control" placeholder="Apellidos" name="surname" type="text" value= <?php echo $jugador -> getApellido(); ?> >
                                        <input class="form-control" placeholder="Email" id="email" name="email" type="text" value= <?php echo $jugador -> getEmail();?>>
                                        <input class="form-control" placeholder="Edad" name="age" type="text"  value= <?php echo $jugador -> getEdad();?>>
                                        <br></br>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="A jugar">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
</html>
