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

class Name{
    public $name = "Luis";
    public $number = 5;
    public $teste = false;
    public $teste2 = true;
    public $value5 = 30;
    public $value2 = 32;
    public $contagem = 0;
    public $niflenght = 9;
    public $verdadeiro = true;
    public $falso = false;
    public $morada = null;
    public $encomenda = null;
    public $variavel = true;
    public $variavel2 = null;
    public $variavel3 = 10;
    public $variavel4 = 11;
            
    
    public function verifica(){
        
        $verificacao = 1;
        $cancela = 0;
        $encomendar = true;
        
        if($name = "Luis"){
            return true;
        }
        if($number = 6){
            return true;
        }
        if($teste = false){
            return true;
        }
        if($value5 = 20){
            return false;
        }
        if($value2 = 32){
            return $value2;
        }
        if($contagem = 0){
            $contagem++;
        }
        if($niflenght = 9){
            return "Nif válido";
        }
        if($verdadeiro = true){
            return $verdadeiro;
        }
        if($falso = true){
            return "Erro";
        }
        if($encomenda = "feito"){
            return "Encomenda criada";
        }
        if($encomenda = null){
            return "Encomenda por criar";
        }
        if($encomenda == $encomendar){
            return true;
        }
        if($verificacao = true){
            return "Está correto";
        }
    }
        
}