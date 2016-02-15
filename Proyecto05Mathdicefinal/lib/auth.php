<?php
 header('Content-Type:text/html;charset=utf-8'); //Codificación de los acentos.
 require_once ('jugador.php');
 require_once ("bd.php");
 $basededatos = new BD();
 

//ALMACENAMOS LOS VALORES OBTENIDOS POR EL MÉTODO POST.
 $id = $_POST['id'];
 $nombre = $_POST['name'];
 $apellido= $_POST['surname'];
 $email = $_POST['email'];
 $edad = $_POST['age'];
 $password =$_POST['pass'];
 $msg ='';
 
   session_start(); 
   $basededatos->comprobarConexion();
   
  
if ($jugadorBD = $basededatos->comprobarUsuario($email)){
     $jugador = new jugador($jugadorBD["id"],$jugadorBD["nombre"],$jugadorBD["apellido"],$jugadorBD["email"],$jugadorBD["edad"],$jugadorBD["pasword"],$jugadorBD["puntuacion"]);
    if ($jugador->getPass() == $password){
         $_SESSION['jugador'] = $jugador;
        header('Location: ../pantalla_juego.php');
    } else {
        $msg ="El password es incorrecto";
        $_SESSION ['message'] = $msg;
        header('Location: ../index.php');
    }
} else{
    
   $msg ="El usuario no existe";
   $_SESSION ['message'] = $msg;
    header('Location: ../index.php');
     
};
   
   
   
   
  /* 
 if (!isset($jugador)) {
        header('Location:index.php');
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
      header('Location:../perfil.php');
   }
 
 
}

*/

?>