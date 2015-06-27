<?php
//Ligação a base de dados
include './mysqlconect.php';

$contador = 0;
$nif = ($_POST['username']);
$password = ($_POST['password']);
$retira = 0;

$num_lenght = strlen($nif);

if ($num_lenght == 9) {
    while ($num_lenght > $contador) {
        $contador++;
        echo $contador;
        echo '<br>';
    }
    echo $nif;
    echo 'NIF Válido!';
    
} elseif ($num_lenght > 9) {
    
    for ($value = 0; $value < $num_lenght; $value++) {
       echo 'aqui' ;
       if ($value > 9) {
           
        $retira++;
        
        if ($retira < 1) {
            
            echo 'Tens que apagar alguns dígitos!!';
            
        }       
       
       }
        
    }
}   elseif ($num_lenght < 9) {
    $tamanho = "medio";    
    
    switch ($tamanho) {
        case "medio":
            echo 'O tamanho é pequeno';
            break;
        case "pequeno":
            echo 'Escreve um numero um pouco maior!';
            break;
    }
    
} else{
    
    
}
////echo $nif;
//echo '<br>';
//echo $password;