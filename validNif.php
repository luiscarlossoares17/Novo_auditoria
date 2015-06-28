<?php

class validNif {
    
    private Function validNif(int $nif, $const = 20){
        
        $lenght = strlen($nif);
        
        if ($lenght == 9) {
            return "OK";
        }
        else{
            return "ERRO";
        }
        
    }
}
