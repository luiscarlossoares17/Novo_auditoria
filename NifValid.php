<?php

class NifValid {    
    private $valor = 19;
    
        function V(int $nif, $const = 20){
        
        $controloNif = false;
        
        $lenght = strlen($nif);
        
        if ($lenght == 9) {
            return "OK";
        }
        else{
            return "ERRO";
        }
        
    }
}
