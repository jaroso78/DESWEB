<?php

 $dado1 = $_POST['dado1'];
 $opciones= $_POST['opciones'];
 $dado2 = $_POST['dado2'];
 $dado1_aleatorio = $_POST['dado1_aleatorio'];
 $dado2_aleatorio = $_POST['dado2_aleatorio'];
 
 if (($dado1 != $dado1_aleatorio) || ($dado2 != $dado2_aleatorio))
    {
        echo "ERROR <br>";
        echo "NO COINCIDEN LOS VALORES DE LOS DADOS: <br>";
        echo "DADO n1 INTRODUCIDO POR USUARIO -> ".$dado1." DADO n1 ALEATORIO-> ".$dado1_aleatorio."<br>";
        echo "DADO n2 INTRODUCIDO POR USUARIO -> ".$dado2." DADO n2 ALEATORIO-> ".$dado2_aleatorio;
    }   else{
        echo "CORRECTO <br>";
        switch ($opciones){
            case '+':
                $resultado = $dado1 + $dado2;
                break;
            case '-':
                $resultado = $dado1 - $dado2;
                break;
        }
             echo $dado1.$opciones.$dado2."=".$resultado;
        
    }
    

?>