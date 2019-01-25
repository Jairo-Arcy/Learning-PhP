<?php

$nota1 = 8;
$nota2 = 7;
$nota3 = 5;

//Calcula a média das 3 notas
$media = ($nota1 + $nota2 + $nota3) / 3;

printf('Média %d: ', $media);


if ($media >= 7) 		//Se média maior ou igual a 7
	echo 'Ótimo';
elseif ($media >= 4) 	//Se média maior que 4 e menor que 7
	echo "Aprovado";
else
	echo "Reprovado"; 	//caso a média seja menor que 4