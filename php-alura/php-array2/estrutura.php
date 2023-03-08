<?php


$array = [ 
    1 => 'um',
    2 => 'dois',
    3 => 'tres'
];

var_dump($array);

foreach ($array as $numeral => $nomeNumero){
    echo "$numeral em pt é $nomeNumero" . PHP_EOL;
    
}
// Conta todas as variaveis de um array.
echo "Total: " . count($array) . PHP_EOL;

?>