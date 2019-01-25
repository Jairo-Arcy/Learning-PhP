<?php

header("Content-Type: text/html; charset=utf-8");

function printArray($array) {
    foreach($array as $chave => $valor) {
        echo $chave . ": " . $valor . "<br>";
    }
}

$filmes = [
    'Argo' => 2012,
    'Taken 2' => 2012,
    'Gangster Squad' => 2013
];

$jogadores = [
    'Diego Souza' => 'Cruzeiro',
    'Lúcio' => 'São Paulo',
    'Neymar' => 'Santos',
    'Marcelo Moreno' => 'Grêmio',
    'Messi' => 'Barcelona'
];

// Imprimindo os arrays

printArray($filmes);

echo '<br>';

printArray($jogadores);