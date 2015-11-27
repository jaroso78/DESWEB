<?php
 header('Content-Type:text/html;charset=utf-8'); //Codificación de los acentos.

//Definimos la clase dado
class dado3{
    
    private $tirada ; //Definimos loas atributos privados de la clase donde almacenaremos el nº que nos ha salido.
    private  $array = [ //Definimos el array donde almacenaremos las imágenes.
    1 => "img/dado-01.png",
    2 => "img/dado-02.png",
    3 => "img/dado-03.png",];
    
    
    //Método constructor.
    function __construct(){
        $this-> tirada = rand(1,3); //Cuando se instancie el objeto se generará la tirada del mismo.
    }
    
    //Nétodo que nos dibuja el dado  en función de la tirada lanzada.
    function getdado(){
        echo ("<img src='".$this-> array[$this-> tirada]."' class='dado3'value='".$this-> tirada."'> </>");
      
    }
    
    //Método que nos devuelve el valor obtenido en la tirada que se encuentra almacenada en la variable tirada.
    function getdadovalue(){
         return $this->tirada;
    }
}

class dado6{
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
        echo ("<img width='100px' heigth='100px' src='".$this-> array[$this-> tirada]."' class='dado6' value='".$this-> tirada."'> </>");
      
    }
    
    //Método que nos devuelve el valor obtenido en la tirada que se encuentra almacenada en la variable tirada.
    function getdadovalue(){
         return $this->tirada;
    }
}

class dado8{
    private $tirada ; //Definimos loas atributos privados de la clase donde almacenaremos el nº que nos ha salido.
    
    //Método constructor.
    function __construct(){
        $this-> tirada = rand(1,12); //Cuando se instancie el objeto se generará la tirada del mismo.
    }
    
    //Nétodo que nos dibuja el dado  en función de la tirada lanzada.
    function getdado(){
       return $this -> tirada;
      
    }
}
?>