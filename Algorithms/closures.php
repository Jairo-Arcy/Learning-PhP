<?php 
  $soma = function ($val1, $val2) {
    return $val1 + $val2;
  };
  
  
 // echo $soma (12, 12); //24

 function execMulti($qtd, $closure) {
   for($i = 1; $i <= $qtd; $i++) {
      $closure();
      echo '<br>';

   }
 }
 $imprime = function () {
  echo "TreinaWeb";
 };

 //execMulti(3, $imprime); //imprime "TreinaWeb"
 execMulti(4, function () {
  echo "Outra Operação";
 });
 