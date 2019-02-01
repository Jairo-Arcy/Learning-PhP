<?php
  function retiraPorcent($porc, $valor) {
    $porcent = $valor * $porc/100;
    return $valor -= $porcent;

  }

 echo  retiraPorcent(10, 100);
 echo "<br>";
 