<?php 
  $texto = 'Olá nome1, nome2, nome3 é um prazer em te conhecer';
  $busca =[
    'nome1',
    'nome2',
    'nome3'
  ];
  $troca = [ 
    'Leonardo',
    'Jairo',
    'Flavio'
  ];
  echo str_ireplace($busca, $troca, $texto); // se ao invés da variavel você coloca 'Cesar' ou qualquer outro nome também irá funcionar.
  echo '<br/>';

  $frase = 'Altera o texto via regex';
  var_dump(preg_replace('/texto/', 'Text', $frase));

