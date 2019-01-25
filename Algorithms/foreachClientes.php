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
    echo "<option value=\"$chave\">$nome</option>";
  } 
?>
</select>
