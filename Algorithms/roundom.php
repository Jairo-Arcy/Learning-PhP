<?php

var_dump(mt_rand(5, 15)); // Gera um número aleatório entre 5 e 15
var_dump(mt_rand()); // Se max e min não forem informados, ela gera o máximo valor randômico.

var_dump(mt_rand(500, mt_getrandmax())); // Gera um número aleatório entre 500 e máximo valor randômico possível.