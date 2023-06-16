<?php

$telefones =    [  
                '(12) 9977 - 2255', 
                '(21) 9851 - 8312', 
                '(21) 2222 - 1111'
                ];

foreach ($telefones as $telefones) {
    $telefoneValido = preg_match('/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/', $telefones, $correspondecia);

    //var_dump($correspondecia);
    if ($telefoneValido) {
        echo 'Telefone Valido!' . PHP_EOL;
    } else {
        echo 'Telefone Não é Valido!' . PHP_EOL;
    }

    //                       () ---> Grupos de captura
    echo preg_replace('/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/', '(XX) \2', $telefones). PHP_EOL;
}






