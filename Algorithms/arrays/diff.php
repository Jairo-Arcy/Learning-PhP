<?php

$array1 = array("a" => "PHP", "CSS", "JavaScript", "Java");
$array2 = array("a" => "CSS", "b" => "JavaScript", "PHP");

$resultado = array_diff($array1, $array2);

print_r($resultado);