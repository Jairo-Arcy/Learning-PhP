<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TreinaWeb Orçamento 0.1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <form action="" method="GET ">
    <p>Nome do Cliente: <input type="text" name="nomecliente"></p>
    <p>Total de Horas: <input type="text" name="totalhoras"></p>
    <p>Valor Hora: <input type="text" name="valorhora"></p>
    <p><input type="submit" value="Calcular"/></p>
  
  </form>
  <?php 
    if(count($_GET) === 3) {
      echo 'Nome Do Cliente: ' . $_GET['nomecliente'] . '<br/>';
      echo 'Total de Horas: ' . $_GET['totalhoras'] . '<br/>';
      echo 'Valor Hora: ' . $_GET['valorhora'] . '<br/>';
      $total = $_GET['totalhoras'] * $_GET['valorhora'];
      echo  '<br/> Total do projeto: ' . number_format($total, 2, ',', '.');
    }
    ?>
  </body>
</html>