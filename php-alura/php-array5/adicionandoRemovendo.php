<?php

    $alunos2022 = [

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

    // recebe um array como referencia e recebe varios elementos que vai passar ao array referenciado ---> array_push()
    // Porém retorna o número de elementos que o array passou a ter somente.
    $alunos2023 = [...$alunos2022, 'Niko', ...$novosAlunos];
    $totalAlunos2023 = array_push($alunos2023);
    print_r($totalAlunos2023 . PHP_EOL);


// array_push retorna SOMENTE o total de chaves que passou a ter, porém, adiciona no final os novos elementos.
print_r(array_push($alunos2023, 'Yasmin', 'Oliver' ));
echo '' . PHP_EOL; 


// Adiciona no Final do array
$alunos2023[] = 'Batman';


// Adiciona no Inicio do array
array_unshift($alunos2023, 'Alan', 'Bly');

//Remove o primeiro elemento do array
array_shift($alunos2023);

//Remove o Último elemento do array
array_pop($alunos2023);


print_r($alunos2023);