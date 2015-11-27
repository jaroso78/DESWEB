<?php
 include_once 'jugador.php';
 header('Content-Type:text/html;charset=utf-8'); //Codificación de los acentos.
//ALMACENAMOS LOS VALORES OBTENIDOS POR EL MÉTODO POST.
 $nombre = $_POST['name'];
 $apellido= $_POST['surname'];
 $email = $_POST['email'];
 $edad = $_POST['age'];
 
   session_start(); 
   
   
 if (!isset($jugador)) {
        header('Location: /Proyecto04Mathdice/index.php');
	}

if ($nombre != '' && $apellido !='' && $email!='' && $edad !=''){ 
  //Creamos el objeto jugador y le pasamos los datos.

  $_SESSION['jugador'] = new jugador ($nombre,$apellido,$email,$edad);
  header('Location:  ../pantalla_juego.php');
}else {
   $jugador = $_SESSION['jugador'];
   if ($nombre != '' && $apellido !='' && $email!='' && $edad !=''){ 
    $jugador -> setNombre($nombre);
    $jugador -> setApellid($apellido);
    $jugador -> setEmail($email);
    $jugador -> setEdad($edad);
   }else
   {
      header('Location: /Proyecto04Mathdice/perfil.php');
   }
 
 
}



?>