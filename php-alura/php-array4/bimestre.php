<?php

    $notasBimestre1 = [
        'Gustavo'   =>    10,
        'Joao'      =>    5,
        'Lorenna'   =>    8,
        'Carvalho'  =>    1,
        'Ozires'    =>    3
    ];

    $notasBimestre2 = [

        'Gustavo'   =>    8,
        'Joao'      =>    2,
        'Lorenna'   =>    10,
        'Carvalho'  =>    3,
        'Ozires'    =>    7
    ];

    //Só leva em consideração o valor
    // Retorna todos os valores de um primeiro array que não estejam nos valores dos próximos arrays ---> array_diff($array1[], $array2[]) 
    var_dump(array_diff($notasBimestre1, $notasBimestre2));

    //Só leva em consideração a chave
    // Retorna todos as chaves com seus respectivos valores do array que esteja no primeiro e não esteja nos próximos arrays ---> array_diff_key()
    var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

    //Leva em consideração chave e valor
    // Retorna as chaves e valores diferente do primeiro array --->  array_diff_assoc()
    var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));


     // Tem diversas variações obs na documentação : https://www.php.net/manual/pt_BR/function.array-diff.php