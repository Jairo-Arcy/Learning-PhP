<?php

  $nome = 'Jairo';
  $saldo = 50;
  $frase = 'Olá %s seu Saldo é de %.2f %s';
  //printf('Olá %s seu Saldo é de %.2f', $nome, $saldo);
 $frase2 =  sprintf('Olá %s seu Saldo é de %.2f', $nome, $saldo);
 echo "$frase2";
 echo '<br/>';
 //vprintf($frase, ['Leonardo', 50.50, 'Muito Bonito']);