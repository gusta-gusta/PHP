<?php

    $alunos2021 = [
        'Gustavo',
        'Joao',
        'Lorenna',
        'Carvalho',
    ];

    $novosAlunos = [


        'Higor',
        'Camilla',
        'Klauz',

    ];

// ISSO É DESEMPACOTAR ---------------------------
// 1ª forma: Array unpacking, onde descreve o desempacotamento de um array em outro array.

    // Descompacta as chaves e seus valores dos arrays e cria assim uma nova coleção com os elementos do array soltos ---> $array = [...$array];
    //Podendo acrescentar um valor no começo, meio e fim do NOVO array, Exemplo: 'Niko' sendo introduzido no meio.
    $alunos2022 = [...$alunos2021, 'Niko', ...$novosAlunos];
    print_r($alunos2022);


//                          CUIDADO! ATENÇÃO NA DIFERENÇA !!! ...
// Tem uma diferença grande em relação a isso:
//2ª forma: Variable-length argument lists, onde descreve que é possível passar um número variável de argumentos para uma função.

    exemplo3Pontinhos(...[1, 2, 3]);
// O php vai pegar cada um dos elementos após os ... e enviar para onde está sendo reqisitado.
    function exemplo3Pontinhos(int $um, int $dois, int $tres){
//                        (...[      1,        2,         3]);

    }

