<?php
include "connection.php";

$idUsuario = $_POST['idUsuario'];
$nomeUsuario = $_POST['nomeUsuario'];
$cpf = $_POST['cpf'];
$telUsuario = $_POST['telUsuario'];
$senha = $_POST['senha'];
$senhaCript = md5($senha);

try{
    $sql = "UPDATE usuario SET nomeUsuario = '$nomeUsuario', cpf = '$cpf', telUsuario = '$telUsuario', senha = '$senhaCript' WHERE idUsuario = '$idUsuario'";
    $sql = $conn->prepare($sql);
    $sql->execute();

    $resultUpdate = $sql->rowCount();
    echo "<script>alert('Usuário atualizado com sucesso!');window.location.href='../../view/usuario.php';</script>";

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>