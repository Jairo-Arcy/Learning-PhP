<?php 
$handle = fopen('config.ini', 'r');
while (list($chave, $valor) = fscanf($handle, "%s\t%s")) {
  $config[$chave] = $valor;  
}
var_dump($config);
fclose($handle);