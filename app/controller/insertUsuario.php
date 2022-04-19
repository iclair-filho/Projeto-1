<?php

include 'connection.php';

$nomeUsuario = $_POST['nomeUsuario'];
$cpf = $_POST['cpf'];
$telUsuario = $_POST['telUsuario'];
$senha = $_POST['senha'];
$senhaCript = md5($senha);
$tipo = $_POST['tipo'];

try{
    $conn->beginTransaction();
    $conn->exec("INSERT INTO usuario (nomeUsuario, cpf, telUsuario, senha, tipo) VALUES ('$nomeUsuario', '$cpf', '$telUsuario', '$senhaCript', '$tipo')");
    $conn->commit();
    echo "<script>alert('Usuario cadastrado com sucesso!');window.location.href='../../view/usuario.php';</script>";

}catch(PDOException $e){
    $conn->rollBack();
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>