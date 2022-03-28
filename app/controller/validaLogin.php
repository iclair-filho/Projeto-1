<?php
include "connection.php";

$cpf = $_POST['cpf'];
$password = $_POST['password'];
$criptPassword = md5($password);

try{
    $sql = $conn->prepare("SELECT * FROM usuario WHERE cpf = '$cpf' AND senha = '$criptPassword'");
    $sql->execute();    
    $resultRows = $sql->fetch();

    if($resultRows > 0){
        echo "<script>alert('Logado com sucesso!');window.location.href='../../view/dashboard.php';</script>";
    }
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>