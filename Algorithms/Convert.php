<?php 
  $valor = true;
  settype($valor, "integer");
  var_dump($valor); // 1
  //...
  $valor = false;
  var_dump((int) $valor); // 0

?>