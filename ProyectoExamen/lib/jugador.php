<?php


//Definimos la clase dado
class jugador{
    
    private $nombre ; //Definimos loas atributos privados de la clase donde almacenaremos el nº que nos ha salido.
    private $apellido;
    private $email;
    private $edad;
    public $puntuacion;
    
    
    //Método constructor.
    function __construct($nombre,$apellido,$email,$edad){
        $this-> nombre = $nombre; 
        $this-> apellido = $apellido;
        $this-> email = $email;
        $this-> edad = $edad;
        $this -> puntuacion = 0;
        
    }
    
    //Método que nos devuelve un string.
    public function __toString()
    {
        return $this-> nombre;
    }
    
    //Nétodo que nos dibuja el dado  en función de la tirada lanzada.
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
     function getPuntuacion(){
        return $this->puntuacion;
    }
    function setPuntuacion($puntuacion){
        $this-> puntuacion = $puntuacion;
    }
    
}
?>