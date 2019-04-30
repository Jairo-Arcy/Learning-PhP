<?php 
$name = $_POST['id'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$ano = $_POST['ano'];
$preco = $_POST['preco'];

header('location:add.php');
require_once ('conexao.php');

try{
 $ins = $conn -> prepare("INSERT INTO carros (id, modelo, marca, ano, valor) values ('default', ?, ?, ?, ?)");
 $ins -> bindParam(1, $modelo);
 $ins -> bindParam(2, $marca);
 $ins -> bindParam(3, $ano);
 $ins -> bindParam(4, $preco);    
 $ins -> execute();
 
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "sucess";
 $alert = true;
}catch(PDOExeption $e){
  echo "error" . $e -> getMessage();
}


