<?php 
  $frase = 'os Cachorros não são sociaveis e muito menos amigos dos homens';
  $mentira = array("não", "menos");

  echo str_replace($mentira, "", $frase);