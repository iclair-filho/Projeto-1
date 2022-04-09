<?php
session_start();
include "connection.php";

$cpf = $_POST['cpf'];
$password = $_POST['password'];
$criptPassword = md5($password);

try{
    $sql = $conn->prepare("SELECT * FROM usuario WHERE cpf = '$cpf' AND senha = '$criptPassword'");
    $sql->execute();    
    $resultRows = $sql->fetch();
    $nomeUsuario = $resultRows['nomeUsuario'];
    
    if($resultRows > 0){

        $_SESSION['cpf'] = $nomeUsuario;
        echo "<script>alert('Logado com sucesso!');window.location.href='../../view/dashboard.php';</script>";

    }else{
        echo "<script>alert('CPF ou Senha inválidos.');window.location.href='..//../index.html';</script>";
    }
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>