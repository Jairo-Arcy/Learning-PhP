<?php

$cursos = array("PHP","CSS3","HTML5","MySQL");

var_dump( current($cursos) ); // Retorna: PHP
var_dump( next($cursos) ); // Retorna: CSS3
var_dump( key($cursos) ); // Retorna: Íncice do elemento atual = 1
var_dump( current($cursos) ); // Retorna: CSS3
var_dump( prev($cursos) ); // Retorna: PHP
var_dump( end($cursos) ); // Retorna: MySQL
var_dump( current($cursos) ); // Retorna: MySQL
var_dump( prev($cursos) ); // Retorna: HTML5
var_dump( key($cursos) ); // Retorna: Íncice do elemento atual = 2 