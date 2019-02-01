<?php

function imprimeArray($array)
{
    // Volta para o primeiro item do array.
    reset($array);

    // Itera sobre o Array enquanto a chave/índice atual for diferente de NULL
    while (key($array) !== NULL)
    {
        // Imprime a chave e o valor do array
        echo key($array) . " = " . current($array) . "<br>";

        // Pula para o próximo item
        next($array);
    }
}

// Imprime o Array

$cursos = array("PHP","CSS3","HTML5","MySQL");
imprimeArray($cursos); // Imprime

echo "<br>";

$cursos = array(
    'a' => 'PHP',
    'b' => 'CSS3',
    'c' => 'HTML5',
    'd' => 'MySQL'
);
imprimeArray($cursos); // Imprime