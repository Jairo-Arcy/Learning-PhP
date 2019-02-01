<?php

function soma() {

    $argumentos = func_get_args();

    /* for($i=0; $argumentos>$i; $i++) { 
     *  echo "Argumento {$i}: " . func_get_arg($i) . "<br>";
    }*/
    foreach ($argumentos as $key => $value) {
      echo "Argumento {$key}: ". $value . "<br />";
    }

}

soma(10, 20, 15);