<?php

$totalSegundos	= 200000;
$segundos	= $totalSegundos;

//Sabemos através da conta 60 * 60 * 24 que um dia tem 86400 segundos
//Para descobrir a quantidade de dias fazemos segundos / 86400
$dias = (int) ($segundos / 86400);

//Agora precisamos saber quantos segundos restaram
$segundos = $segundos - ($dias * 86400);

//Sabemos que uma hora tem 3600 segundos
////Para descobrir a quantidade de horas fazemos segundos / 3600
$horas = (int) ($segundos / 3600);

//Agora precisamos saber quantos segundos restaram
$segundos = $segundos - ($horas * 3600);

//Sabemos que um minuto tem 60 segundos
////Para descobrir a quantidade de minutos fazemos segundos / 60
$minutos = (int) ($segundos / 60);

//Por fim os segundos que restaram
$segundos = $segundos - ($minutos * 60);

printf("<strong>Em %d segundos temos:</strong> %d dias, %d horas, %d minutos e %d segundos", $totalSegundos, $dias, $horas, $minutos, $segundos);


