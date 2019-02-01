<?php 
$nome = 'Treina123 Cur789';
$alteracoes = array(
  '123' => 'web',
  '789' => 'sos'
);

echo strtr($nome, $alteracoes);