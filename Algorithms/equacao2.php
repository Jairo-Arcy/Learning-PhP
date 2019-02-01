<?php
//echo pow(4, 2); // php 5.5
//echo 4**2; // php 5.6 +
$a = 1;
$b = -4;

$c = 4;
$delta = pow($b, 2) - 4 * $a * $c;
if ($delta < 0) {
  echo 'Conjunto Vazio';
}else {
  $bhask1 = (-$b + sqrt($delta))/ (2 * $a);
  $bhask2 = (-$b - sqrt($delta))/ (2 * $a);
  echo $delta;
  echo '<br>';
  echo 'conjunto {'. $bhask1. ','. $bhask2. '}';
}

