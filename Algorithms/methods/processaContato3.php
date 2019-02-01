<?php 
if (isset($_GET["cursos"])){
  $cursos = $_GET["cursos"];
  foreach($cursos as $indice => $cursos) {
      echo $indice . ": " . $cursos . "<br/>";
    
  }

}