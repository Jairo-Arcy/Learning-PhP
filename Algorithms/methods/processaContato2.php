<?php

// Charset
header("Content-Type: text/html; charset=utf-8");

// Avaliando se os dados foram enviados corretamente
if( !isset($_GET["valor1"]) || !isset($_GET["valor2"]) )
{
    // 'Exit()' para com a execução do script neste ponto e escreve na tela
    exit("<b>Erro:</b> Para somar é preciso que os valores sejam informados corretamente.");
}

// Forçando a conversão dos dados recebidos para inteiro
$valor1 = (int) $_GET["valor1"];
$valor2 = (int) $_GET["valor2"];

//Soma
$resultado = $valor1 + $valor2;

// Imprime o resultado
echo "<b>Resultado da soma:</b>  " . $resultado;