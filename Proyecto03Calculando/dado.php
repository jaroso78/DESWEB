<?php


//Definimos la clase dado
class dado{
    
    private $tirada ; //Definimos loas atributos privados de la clase donde almacenaremos el nº que nos ha salido.
    private  $array = [ //Definimos el array donde almacenaremos las imágenes.
    1 => "img/dado-01.png",
    2 => "img/dado-02.png",
    3 => "img/dado-03.png",
    4 => "img/dado-04.png",
    5 => "img/dado-05.png",
    6 => "img/dado-06.png",];
    
    
    //Método constructor.
    function __construct(){
        $this-> tirada = rand(1,6); //Cuando se instancie el objeto se generará la tirada del mismo.
    }
    
    //Nétodo que nos dibuja el dado  en función de la tirada lanzada.
    function getdado(){
        echo ("<img src='".$this-> array[$this-> tirada]."'width='95px' height='95px' > </>");
      
    }
    
    //Método que nos devuelve el valor obtenido en la tirada que se encuentra almacenada en la variable tirada.
    function getdadovalue(){
         return $this->tirada;
    }
    
    
}
?>