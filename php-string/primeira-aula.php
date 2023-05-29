<?php

$nome = 'Gustavo Sales';

   $FamiliaSales = str_contains($nome, needle:'Sales');

if ($FamiliaSales) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}

