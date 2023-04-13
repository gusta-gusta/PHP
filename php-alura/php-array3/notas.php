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
    echo 'Sim, é um array' . PHP_EOL;
}

// verifica se é array ---> is_array()
if (is_array($notas)){
    echo "é um array bro". PHP_EOL;
}


// verifica se a chave existe ----> array_key_exists(), sendo ('chave', $array)
echo 'Existe o aluno Gustavo?'. PHP_EOL;
array_key_exists('gustavo', $notas);


// verifica se a chave existe e não é nula ---->    isset()
echo 'Gustavo fez a prova? '. PHP_EOL;
var_dump(isset($notas['gustavo']));


// verifica se existe o valor no array ---> in_array(valor, $array)
echo 'Alguem tirou 10 ?'. PHP_EOL; 
var_dump(in_array(10, $notas, strict: true));  // strict: true --> Deixa a busca pelo valor mais rigorosa, como se fosse === em vez de == (não sendo obrigatório seu uso)


// verifica qual é a chave, passando seu valor e o array como parametros ---> array_search(valor, $array)
echo 'Quem tirou 10? '. PHP_EOL;
array_search(10, $notas, strict: true);
?>