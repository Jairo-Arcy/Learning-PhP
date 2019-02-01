<?php 
echo 'Nome Do Cliente: ' . $_GET['nomecliente'] . '<br/>';
echo 'Total de Horas: ' . $_GET['totalhoras'] . '<br/>';
echo 'Valor Hora: ' . $_GET['valorhora'] . '<br/>';
$total = $_GET['totalhoras'] * $_GET['valorhora'];
echo  '<br/> Total do projeto: ' . number_format($total, 2, ',', '.');

