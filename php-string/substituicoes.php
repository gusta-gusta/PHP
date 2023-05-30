<?php

$texto = 'Ele é um bananão, ele pipocou';

echo str_replace('bananão', '***', $texto) . '</br>';

echo strtr($texto, ['bananão' => '***', 'pipocou' => '***']) . '</br>';





$url = "https://alura.com.br/";

if ( str_starts_with($url, "https")) {
    echo "$url é segura";
} else {
    echo "$url Não é segura";
}