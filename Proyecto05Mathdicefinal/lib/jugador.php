<?php


//Definimos la clase dado
class jugador{
    
    private $id;
    private $nombre ; //Definimos loas atributos privados de la clase donde almacenaremos el nº que nos ha salido.
    private $apellido;
    private $email;
    private $edad;
    private $pass;
    private $puntuacion;
    
    
    //Método constructor.
    function __construct($id, $nombre,$apellido,$email,$edad, $pass,$puntuacion){
        $this-> id = $id;
        $this-> nombre = $nombre; 
        $this-> apellido = $apellido;
        $this-> email = $email;
        $this-> edad = $edad;
        $this-> pass = $pass;
        $this-> puntuacion = $puntuacion;
        
    }
    
    //Método que nos devuelve un string.
    public function __toString()
    {
        return $this-> nombre;
    }
    
    //Nétodo que nos dibuja el dado  en función de la tirada lanzada.
    function getId(){
        return $this->id;
    }
    
    function setId($id){
        $this-> id = $id;
    }
    
    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nombre){
        $this-> nombre = $nombre;
    }
    function getApellido(){
        return $this->apellido;
    }
    function setApellido($apellido){
        $this-> apellido = $apellido;
    }
    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $this-> email = $email;
    }
    function getEdad(){
        return $this->edad;
    }
    function setEdad($edad){
        $this-> edad = $edad;
    }
    function getPass(){
        return $this->pass;
    }
    function setPass($pass){
        $this->pass = $pass;
    }
    function getPuntuacion(){
        return $this->puntuacion;
    }
    function setPuntuacion($puntuacion){
        $this->puntuacion = $puntuacion;
    }
    
}
?>