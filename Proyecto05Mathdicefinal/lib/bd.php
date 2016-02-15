<?php
//Definición de la clase de BD.

class BD
{
    private $host ="localhost";
    private $db="mathdice";
    private $user="root";
    private $pass="jrodrigue1459";
    private $conexion;
    
    //CONSTRUCTOR
    
    function __construct(){
        $this->conexion = new mysqli($this->host,$this->user,$this->pass, $this->db);
    }
    
    
    function comprobarConexion(){
        if( $this->conexion->connect_errno){
            echo "Fallo al conectar con MySql: (".$this->conexion->connect_errno.") ".$this->conexion->connect_error;
        }
    }
    
    
    function comprobarUsuario($email){
        $consulta ="SELECT * FROM jugador WHERE email= '".$email."'";
        if ($result = $this->conexion->query($consulta)){
            $jugador = $result->fetch_assoc();
            return $jugador;
            
        } else{
            return null;
        }
    }
    function insertarJugador($email, $nombre, $apellidos, $edad, $password, $puntos){
       $consulta = "INSERT INTO jugador (nombre, apellido, email, edad, puntuacion, pasword)
    VALUES ('".$nombre."','".$apellidos."','".$email."','".$edad."','".$puntos."','".$password."')";
        $this -> conexion -> query($consulta);
        return $mysqli -> insert_id;
    }
    
    function actualizarPuntuacion ($id, $puntos){
        $consulta ="UPDATE jugador SET puntuacion = '".$puntos."' WHERE id = '".$id."'";
        $this-> conexion -> query($consulta);
        return $mysqli ->affected_rows ;
    }
}

?>