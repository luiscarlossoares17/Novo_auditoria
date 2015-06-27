<?php

function calcula(int $value, $s = NULL ,String $name){
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

