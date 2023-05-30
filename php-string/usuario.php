<?php 


$nome = 'Gustavo Sales';
$email = 'gustavo@alura.com.br';
$senha = 'áéíóú';

echo mb_strlen($senha) . PHP_EOL; // mb_strlen --> conta os caracteres

if (mb_strlen($senha) < 8) {
    echo 'Senha insergura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');  
                   // pega até a posição --> 'x'

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . '<br/>'; // stroUPPER e strtolower
echo substr($email, $posicaoDoArroba + 1) . '<br/>';
            // retorna da posição $x + 1 


var_dump(explode(' ', $nome));
//       explode(separador ,  variavel )  -> obs que o separador do nome e sobrenome é um espaço.
echo '<br/>' . '<br/>';

list($nome, $sobrenome) = explode(' ', $nome);
// faz uma lista sendo o primeiro $nome e o $sobrenome como segundo.

echo 'Nome: ' . $nome . '<br/>';
echo 'Sobrenome: ' . $sobrenome . '<br/>';


echo ltrim($email,  'g') . '<br/>';
echo rtrim($email, 'r');
