<?php


$array = [ 
    0 => 'um',
    1 => 'dois',
    2 => 'tres'
];

var_dump($array);

foreach ($array as $numeral => $nomeNumero){
    echo "$numeral em pt é $nomeNumero" . PHP_EOL;
    
}
// Conta todas as variaveis de um array.
echo "Total: " . count($array) . PHP_EOL;


//Verifica se existe uma lista apartir da versao 8.1 + do PHP
//--------------------/* var_dump(array_is_list($array)); *///---------------------------------
?>