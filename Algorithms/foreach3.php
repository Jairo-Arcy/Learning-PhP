<?php

header("Content-Type: text/html; charset=utf-8");

$jogadores = [
    'Pedro' => [
        'Time' => 'Cruzeiro',
        'Posição' => 'meio campo'
    ],
    'Thiago' => [
        'Time' => 'São Paulo',
        'Posição' => 'volante'
    ],
    'José' => [
        'Time' => 'Internacional',
        'Posição' => 'zagueiro'
    ],
    'Ricardo' => [
        'Time' => 'Sport Recife',
        'Posição' => 'lateral'
    ],
];

foreach($jogadores as $nome => $dados) {

    echo "Nome: " . $nome . "<br />";

    foreach($dados as $item => $valor) {
        echo $item . ": " . $valor . "<br />";
    }

    echo "<br />";

}