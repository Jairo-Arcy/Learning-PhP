<?php 
  $clientes = [
    1 => 'Carlos',
    2 => 'Roberto',
    3 => 'Jairo',
    4 => 'Jurandir',
    5 => 'Gisele'
  ];
?>

<select>
<?php
  foreach ($clientes as $chave => $nome) {
    if ($chave == 4) {
     continue;
    }
    echo "<option value=\"$chave\">$nome</option>";
  } 
?>
</select>
        