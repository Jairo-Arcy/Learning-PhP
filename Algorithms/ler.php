<?php

$nomeArquivo = "cursos.txt";
$arquivo = fopen ($nomeArquivo, "r+");

if($arquivo) {
    $conteudo = fread ($arquivo, filesize($nomeArquivo));
    echo nl2br($conteudo); //troca quebra de linhas pela tag Html de quebra de texto <br/>
}
else {
    echo "Erro.";
}
fclose($arquivo);
