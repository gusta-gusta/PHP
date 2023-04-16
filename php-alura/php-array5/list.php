<?php

    $dados = 
    
    [
        
        'nome' => 'Gustavo',
        'nota' =>  10,
        'idade' =>  22
    
    ];


// list = lista as chaves do array e torna elas variaveis
 // list($nome, $nota, $idade) =  $dados;


// extract = pega array e cria variaveis
extract($dados);

// compact = pega varias variaveis e cria array
print_r(compact('nome', 'nota', 'idade'));

