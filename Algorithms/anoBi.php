<?php 

  $ano = 2020;
  $b = $ano % 4;
  if ($ano % 4 == 0) {
    echo ("Ano Bissexto");
  }else {
    echo ("não Bissexto");
  }