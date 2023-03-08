<?php

    $notas = [
        [
            'aluno' => 'Lorenna',
            'nota' => 5,
        ],
        [
            'aluno' => 'Gustavo',
            'nota' => 8,
        ],
    ];

    function ordenaNotas(array $nota1, array $nota2): int
    {
        if ($nota1["nota"] > $nota2["nota"]) {
            return -1;
        }

        if ($nota2["nota"] > $nota1["nota"]) {
            return 1;
        }
 
        return 0;
    }

//Passa a função ordenaNotas por parâmetro e ordena o sub array por onde queira nesse caso podia ser por ['aluno'] ou ['nota'] dentro de $array, a Função ensina o usort por onde deve ordenar !
    usort($notas, 'ordenaNotas');
    var_dump($notas);


    function ordenaNotasFODA(array $notaUm, array $notaDois): int
    {
        return $notaDois['nota'] <=> $notaUm['nota'];
        // Se o notaUm for MENOR que o notaDois ele retorna -1
        // Se o notaUm for MAIOR que o notaDois ele retorna 1
        // Se forem IGUAIS ele retorna 0
    
    }
    
    usort($notas, 'ordenaNotasFODA');
    var_dump($notas);
    

?>