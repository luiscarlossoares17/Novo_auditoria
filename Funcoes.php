<?php

function calcula(int $value, $s = NULL ,String $name, int $Numero = 5, int $contador){
    
    if ($value > 10) {
        exit(24);
    }
    
    if($s == 5){
        
        eval($s = 10);    
        
    } else {
        echo 'Valor baixo';
    }
}

