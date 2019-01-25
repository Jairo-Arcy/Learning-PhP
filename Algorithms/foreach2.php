<?php 
  $obj = new stdClass();

  $obj ->nome = 'Marcus';
  $obj ->sobrenome = 'Miller';
  $obj ->email = 'marcusmilller@testmail.com';
  foreach ($obj as $prop => $valor) {
    echo "$prop: $valor <br>";
  }
?>