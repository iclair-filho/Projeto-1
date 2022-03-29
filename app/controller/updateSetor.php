<?php
include "connection.php";

$idSetor = $_POST['idSetor'];
$setor = $_POST['setor'];
$localidade = $_POST['localidade'];

try{
    $sql = "UPDATE setor SET setor = '$setor', localidade = '$localidade' WHERE idSetor = '$idSetor'";
    $sql = $conn->prepare($sql);
    $sql->execute();

    $resultUpdate = $sql->rowCount();
    echo "<script>alert('Setor atualizado com sucesso!');window.location.href='../../view/setor.phps';</script>";

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>