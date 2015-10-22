<?php
//Función para lanzar dados.
function dado(){
    //Array donde almacenamos los dados y las imágenes.
    $array = [
    1 => "img\dado-01.png",
    2 => "img\dado-02.png",
    3 => "img\dado-03.png",
    4 => "img\dado-04.png",
    5 => "img\dado-05.png",
    6 => "img\dado-06.png",];
    //Función para el lanzamiento de forma aleatoria del 1 al 6
    $tirada=rand(1,6);
    //Presentamos en pantalla el dado seleccionado.
    echo ("<img src='".$array[$tirada]."'> </>");
}
?>