<?php
//Ligação a base de dados
include './mysqlconect.php';

$nif = ($_POST['username']);
$password = ($_POST['password']);
//ERRO

$num_lenght = strlen($nif);
echo $num_lenght;
if ($num_lenght == 9) {
    
    echo $nif;
    echo 'NIF Válido!';
    
} else {
    
}
////echo $nif;
//echo '<br>';
//echo $password;