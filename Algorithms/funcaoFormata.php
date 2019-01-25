<?php

function formataValor($valor) {
  return  "R$ " . number_format($valor,2,",",".");
}

echo formataValor(1000); // Imprime: R$ 1.000,00

echo "<br>";

echo formataValor(2507.30); // Imprime: R$ 2.507,30