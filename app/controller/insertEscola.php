<?php

include 'connection.php';

$nomeEscola = $_POST['nomeEscola'];
$responsavel = $_POST['responsavel'];
$localidade = $_POST['localidade'];
$idSetor = $_POST['idSetor'];

try{
    $conn->beginTransaction();
    $conn->exec("INSERT INTO escola (nomeEscola, responsavel, localidade, idSetor) VALUES ('$nomeEscola', '$responsavel', '$localidade', '$idSetor')");
    $conn->commit();
    echo "<script>alert('Escola cadastrada com sucesso.');window.location.href='../../view/escola.php';</script>";
    
}catch(PDOException $e){
    $conn->rollBack();
    echo "Error: " . $e->getMessage();  
}

$conn = null;
?>