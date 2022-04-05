<?php
include "connection.php";

$idEscola = $_POST['idEscola'];
$nomeEscola = $_POST['nomeEscola'];
$responsavel = $_POST['responsavel'];
$localidade = $_POST['localidade'];

try{
    $sql = "UPDATE escola SET nomeEscola = '$nomeEscola', responsavel = '$responsavel', localidade = '$localidade' WHERE idEscola = '$idEscola'";
    $sql = $conn->prepare($sql);
    $sql->execute();

    $resultUpdate = $sql->rowCount();
    echo "<script>alert('Escola atualizada com sucesso!');window.location.href='../../view/escola.php';</script>";

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>