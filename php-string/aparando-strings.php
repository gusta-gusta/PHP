<?php 

$nome = ' Gustavo ';
$sobrenome = 'Sales';

// Apara as pontas, por PADRÃO o espaço e alguns caracteres invisiveis
echo trim($nome, '') . '<br/>';

// Rtrim --> Apara o right
echo rtrim($sobrenome, 's') . '<br/>';

//Ltrim --> Apara o Left
echo ltrim($sobrenome, 'S') . '<br/>';