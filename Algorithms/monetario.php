<?php 
  $saldo = 2000.00;
  $retirada = 133.52;
  // com números flutuantes temos mais precisão e questão monetária;
  $resultado = $saldo - $retirada;
  $resultado -= $resultado * 0.10;
  echo 'R$'. number_format( $resultado, 2, ',', '.');// o Ultimo representa a casa de milhar o primeiro representa a casa da dezena
  echo '<br>';
  $valor = 10e5;
  echo $valor;

?>