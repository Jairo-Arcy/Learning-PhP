<?php

$a = array(1,'a',2, 'b' => 'c');

// True. Sim, a variável $a existe.
var_dump( isset($a) );

// True. Elemento de índice 0 existe.
var_dump( isset($a[0]) );

// False. Elemento de índice 3 não existe.
var_dump( isset($a[3]) );

// False. Elemento de índice 4 não existe.
var_dump( isset($a[4]) );

// True. Elemento de chave 'b' existe.
var_dump( isset($a['b']) );

// False. Não existe elemento de chave 'c'. 'c' é o valor do elemento da chave 'b'
var_dump( isset($a['c']) );