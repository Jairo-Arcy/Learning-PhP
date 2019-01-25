<?php 
  $cursos = ["CSS", "Java", "C#", "C++"];
  foreach ($cursos as $nome) {
    echo "Curso: " . $nome . "<br/>";
  }
  echo "<br/>";

  $curso = [
    'Curso 1' => 'PHP',
    'Curso 2' => 'Java',
    'Curso 3' => 'HTML'
  ];
  foreach ($curso as $chave => $valor) {
    echo $chave . ": " . $valor . "<br />";
  }
?>
