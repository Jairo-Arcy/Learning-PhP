<?php 
  $a = 9;
  $b = 7;
  $c = 0;
  $m = ($a + $b + $c) / 3;
  if($m >= 7) {
    echo ("Ótimo! <br>");
  }else if (($m >= 4) || ($m == 6)) {
    echo ("Aprovado <br>");
  }else if($m <= 3) {
    echo ("Reprovado <br>");
  }
  echo ("media: $m");
?>