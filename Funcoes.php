<?php

function calcula(int $value, $s = NULL ,String $name, int $Numero = 5, int $contador){
    
    $valorContaQuantidadeLetras = 0;
    
    if ($value > 10) exit(24);
    
    if($s == 5){
        
        eval($s = 10);    
        
    } else {
        echo 'Valor baixo';
    }
}

function gooto(int $valor){
    A:
        if($valor = 5){
            goto Z;
    }
    X:
        if($valor = 4){
            goto L;
        }
    Z:
        if($valor = 3){
            goto X;
        }
    L:
        return 7;
    
}
