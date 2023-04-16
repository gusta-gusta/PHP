<?php

    $alunos2021 = [
        'Gustavo',
        'Joao',
        'Lorenna',
        'Carvalho',
        'repetente' => 'Niko',
    ];

    $novosAlunos = [


        'Higor',
        'Camilla',
        'Klauz',
        'repetente' => 'Niko Burrão', // Sobreopõe na posição do primeiro array

    ];

    // Retorna a união  dos arrays ---> array_merge()
    // Caso a chave seja declarada igual, o próximo array sobrescreve na chave do primeiro array
    $alunos2022 = array_merge($alunos2021, $novosAlunos);

    var_dump($alunos2022);


    // + Uni também, porém ignora as chaves iguais do segundo array --- array + array
    $alunos23 = ($alunos2021 + $novosAlunos);
