<?php
 	

/*********************************************************
PROYECTO 03    JAVIER RODRÍGUEZ SOLER.
*********************************************************/
	 
	include_once 'lib/configuracion.php';
	include_once 'lib/juego.php';
	header('Content-Type:text/html;charset=utf-8'); //Codificación de los acentos.
	
	
    session_start();
	$msg  = $_SESSION["message"];
	//if (!isset($jugador)) {
    //    header('Location:index.php');
    //	}
	
	
?> 
 
 
  <html>
	<head>
		<title>Proyecto 05 MathDice final. </title>
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
                                        <input class="form-control" placeholder="Email" id="email" name="email" type="text">
                                        <input class="form-control" placeholder="Password" name="pass" type="password">
                                        <a href="perfil.php" >Crear una nueva cuenta</a>
                                        <br></br>
                                        <?php echo $msg ;?>
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
