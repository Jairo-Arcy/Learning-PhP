<?php 
echo "<h2>". $_GET["nome"] . "</h2>";
echo  "<p>". $_GET["email"] . "</p>"; 
echo '<br/>';

foreach ($_GET as $key => $value) {
  echo "<b>Variável: </b> " . $key . "<br/>";
  echo "<b>Valor: </b> " . $value;
  echo '<br/>';
}