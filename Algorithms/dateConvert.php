<?php
// faz a interpretação da string e formata ela em data
$string = '2012-01-10';
// exibe os segundos desde 1970
$data = strtotime($string);
echo $data;
if ($data === false) {
  echo "Formato Invalido!!!";
}else {
    var_dump($data);
    var_dump(date("d/m/Y", $data));
}
//data formatada
$date1 =  date("d/m/Y H:i:s a");
echo $date1;
// onde estamos
$country = date_default_timezone_get();
echo '<br />';
echo $country;
//para Transformar as palavras do dia semana em português.
setlocale(LC_ALL, 'pt_Br', 'ptb');
echo '<br />';