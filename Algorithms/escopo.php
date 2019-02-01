<?php
$nome = 'TreinaWeb';
function teste() {
  //escopo global
  global $nome;
  //escopo SuperGlobal
  $GLOBALS['nome'];


}
// várivavel superglobal disponível
echo $_SERVER['SERVER_NAME'];
echo '<br />';
teste();