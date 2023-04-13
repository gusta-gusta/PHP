<?php

    $notas = [
        'Gustavo'   =>    10,
        'Joao'      =>    5,
        'Lorenna'   =>    8,
        'Carvalho'  =>    1,
        'Ozires'    =>    3
    ];

rsort($notas);
var_dump($notas);


//Verificar se é array ---> gettype()

if (gettype($notas) == 'array'){
    echo 'Sim, é um array';
}

// verifica se é array ---> is_array()
if (is_array($notas)){
    echo "é um array bro";
}

?>