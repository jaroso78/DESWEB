<?php
 include_once 'jugador.php';
 header('Content-Type:text/html;charset=utf-8'); //Codificación de los acentos.
//ALMACENAMOS LOS VALORES OBTENIDOS POR EL MÉTODO POST.
 $nombre = $_POST['name'];
 $apellido= $_POST['surname'];
 $email = $_POST['email'];
 $edad = $_POST['age'];

if ((isset($nombre) && $nombre != '')&&(isset($apellido)&&$apellido !='')&&(isset($email)&&$email!='')&&(isset($edad)&&$edad)){ 
  //Creamos el objeto jugador y le pasamos los datos.
  session_start(); 
  $_SESSION['jugador'] = new jugador ($nombre,$apellido,$email,$edad);
  header('Location:  ../pantalla_juego.php');
}else {
 header('Location:  ../index.php');
}

?>