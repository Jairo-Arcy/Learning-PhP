<?php 
  $clientes = [
    1 => [
      'nome' => 'Leonardo',
      'endereço' => 'Rua Tanawa, 23',
      'telefones' => [
            'residencial' => '31335639',
            'comercial'  => '991414190'        
      ],
  ],  
    2 => [],
    3 => [],
  ];
  echo $clientes[1]['telefones']['comercial'];



?>