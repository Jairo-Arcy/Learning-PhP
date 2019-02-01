<?php

$a = array();
$b = array('');
$c = array(1, '10');
$d = array(
    'Spring Breakers' => array(
        'ano' => 2012,
        'diretor' => 'Ruben Fleischer'
    ),
    'Gangster Squad' => array(
        'ano' => 2013,
        'diretor' => 'Harmony Korine'
    )
);

var_dump( count($a) ); // 0 (vazio)
var_dump( count($b) ); // 1 (string vazia)
var_dump( count($c) ); // 2
var_dump( count($d) ); // 2