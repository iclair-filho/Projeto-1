<?php
include "connection.php";

$idUsuario = $_POST['idUsuario'];
$nomeUsuario = $_POST['nomeUsuario'];
$telUsuario = $_POST['telUsuario'];
$senha = $_POST['senha'];
$senhaCript = md5($senha);

try{
    $sql = "UPDATE usuario SET nomeUsuario = '$nomeUsuario', telUsuario = '$telUsuario', senha = '$senhaCript' WHERE idUsuario = '$idUsuario'";
    $sql = $conn->prepare($sql);
    $sql->execute();

    $resultUpdate = $sql->rowCount();
    echo "<script>alert('Usuario atualizado com sucesso!');window.location.href='../../view/cadUsuario.php';</script>";

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>