<?php
 header('Content-Type:text/html;charset=utf-8'); //Codificación de los acentos.
 require_once ('jugador.php');
 require_once ("bd.php");
 $basededatos = new BD();
 
 
//ALMACENAMOS LOS VALORES OBTENIDOS POR EL MÉTODO POST.
 $nombre = $_POST['name'];
 $apellido= $_POST['surname'];
 $email = $_POST['email'];
 $edad = $_POST['age'];
 $password =$_POST['pass'];
 $puntos = $_POST['puntos'];
 $msg ='';
 
   if ($nombre != '' && $apellido !='' && $email!='' && $edad !='' && $password !=''){
        $resultado = $basededatos->insertarJugador($email,$nombre,$apellido,$edad,$password,0);
        header('Location: ../pantalla_juego.php');
   } else{
         header('Location:  ../perfil.php');
   }
 
 
 ?>