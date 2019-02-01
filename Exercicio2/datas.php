<?php

//date_default_timezone_set('America/Sao_Paulo');

//setlocale(LC_ALL, 'pt_Br', 'ptb');

//echo date('d/m/Y H:i:s', strtotime('now'));

// Iso data 8601
// echo date('Y-m-d H:i:s');

$datas = [
    '2013-03-03',
    '2013-05-10 09:00',
    '2013-05-10 10:35',
    '2013-05-10 11:20',
    '2014-12-03 10:00'
];

$inicial = '2013-05-10 09:00';
$final = '2013-05-10 10:00';

foreach ($datas as $data) {
    if ($data >= $inicial && $data <= $final) {
        echo $data . '<br>';
    }
}
