<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set("America/Sao_Paulo");
$tempo = date_default_timezone_get();
var_dump(date("d/m/Y") ); 
var_dump(date("z"));
var_dump(date("H:i:a"));
echo '<br/>';
echo $tempo;
