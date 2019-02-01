<?php 
header('Content-Type: text/html; charset=utf-8');
function dataSaudacao() {
  $diaSemana = array(
    1 => 'Segunda',
    2 => 'Terça',
    3=> 'Quarta',
    4 => 'Quinta',
    5 => 'Sexta',
    6 => 'Sabado',
    0 => 'Domingo'
  );
  $mesAno = array(
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'Abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'Agosto',
    9 => 'Setembro',
    10=> 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro'
  );
  return $diaSemana[date('w')]. ", " . date('d') . " de " . $mesAno[date('n')] . " de " . date('Y');
}
echo dataSaudacao();