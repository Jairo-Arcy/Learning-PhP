<?php 
function maximoValor() {

  $max = -PHP_INT_MAX;
  foreach(func_get_args() as $arg) {
    if($arg > $max) {
      $max = $arg;
    }
  }
  return $max;
}
echo maximoValor(1, 70000000, 10, 20, 200000000000);