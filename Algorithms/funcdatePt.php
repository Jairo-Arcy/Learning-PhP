<?php

header('Content-Type: text/html; charset=utf-8');

function dataSaudacao($formato='extenso')
{
  $formatoValidos = array('extenso', 'abreviado');
  if (!in_array($formato, $formatoValidos)) {
      return "Formato Inválido!!";
  }
    $diaSemana = array(
        1 => array(
            'extenso' => 'Segunda',
            'abreviado' => 'Seg'
        ),
        2 => array(
            'extenso' => 'Terça',
            'abreviado' => 'Ter'
        ),
        3 => array(
            'extenso' => 'Quarta',
            'abreviado' => 'Qua'
        ),
        4 => array(
            'extenso' => 'Quinta',
            'abreviado' => 'Qui'
        ),
        5 => array(
            'extenso' => 'Sexta',
            'abreviado' => 'Sex'
        ),
        6 => array(
            'extenso' => 'Sábado',
            'abreviado' => 'ab'
        ),
        0 => array(
            'extenso' => 'Domingo',
            'abreviado' => 'Dom'
        )
    );
    return $diaSemana[date('w')][$formato];
}

// Formato 'extenso'
echo "Olá, hoje é <b>" . dataSaudacao('didididi') . ".</b> <br>";

// Formato 'abreviado'
echo "Olá, hoje é <b>" . dataSaudacao('abreviado') . ".</b>";
