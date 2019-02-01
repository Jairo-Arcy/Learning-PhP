<?php 
  function media(...$params) {
  $soma = 0;
  foreach ($params as $param) {
    $soma += $param;
  }
  return $soma/count($params);
 }
function imprime($val1, $val2, $val3) {
  echo "$val1, $val2, $val3";

}
 echo media(2, 3,5,6,7);
 echo "<br>";
 echo media(1,9,10);
 echo "<br>";
 echo media(5,3,6);
 echo "<br>";
 $nomes = ['Leonardo', 'Carlos', 'Pamela'];
 imprime(...$nomes);