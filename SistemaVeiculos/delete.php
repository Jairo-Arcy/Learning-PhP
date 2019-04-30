<?php 
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header("location: index.php");
    $id = $_GET['id'];
    include "conexao.php";
    try{
        $del = $conn -> prepare("DELETE FROM carros where id =  ?");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $del -> bindParam(1, $id);
        $del -> execute();
    }catch(PDOException $e){
        echo "Erro" . $e ->getMessage();
    }
}else if($_SERVER['REQUEST_METHOD'] == 'POST') {
    header("location: index.php");
    include "conexao.php";
    try{
        $del = $conn -> prepare("DELETE FROM carros");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $del -> execute();
        echo "Sucess";
    }catch(PDOException $e){
        echo "Erro" . $e ->getMessage();
    }
}
?>