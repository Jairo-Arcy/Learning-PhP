<?php

$ano = 2016;


//Se o ano for divisível por 400, é bissexto
if ( ($ano % 400) == 0 )
	$bissexto = true;
//Se o ano for divisível por 4 e não for divisível por 100, é bissexto
elseif ( ($ano % 4) == 0 &&  ($ano % 100) != 0 )
	$bissexto = true;
else
	$bissexto = false;

if ($bissexto)
	printf('%d é bissexto', $ano);
else
	printf('%d não é bissexto', $ano);
