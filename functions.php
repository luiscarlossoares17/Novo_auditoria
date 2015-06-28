<?php

function Calcula(int $value, $s = NULL ,String $name, int $Numero = 5, int $contador){
    echo $value;
    
    if ($value > 10) {
        $s = 5; 
    }
    
    if($s == 5){
        
        echo $name;    
        
    } else {
        echo 'Valor baixo';
    }
}

