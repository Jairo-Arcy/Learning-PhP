<?php

$inicial = 10;
$final = 1000;

$soma = 0;

//Para i igual ao valor inicial, até i menor ou igual ao valor final, incrementa 1
for($i=$inicial; $i <= $final; $i++)
	$soma = $soma + $i;     //Soma o valor atual de i a variável acumuladora soma

printf('A soma dos números entre %d e %d é: %d', $inicial, $final, $soma);