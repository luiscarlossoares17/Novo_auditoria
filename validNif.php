<?php

class validNif {
    
    private function validNif(int $nif){
        
        $lenght = strlen($nif);
        
        if ($lenght == 9) {
            return "OK";
        }
        else{
            return "ERRO";
        }
        
    }
}
