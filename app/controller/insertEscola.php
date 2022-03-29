<?php

include 'connection.php';

$nomeEscola = $_POST['nomeEscola'];
$responsavel = $_POST['responsavel'];
$localidade = $_POST['localidade'];

try{
    $conn->beginTransaction();
    $conn->exec("INSERT INTO escola (nomeEscola, responsavel, localidade) VALUES ('$nomeEscola', '$responsavel', '$localidade')");
    $conn->commit();
    echo "<script>alert('Escola cadastrada com sucesso.');window.location.href='../../view/escola.php';</script>";
    
}catch(PDOException $e){
    $conn->rollBack();
    echo "Error: " . $e->getMessage();  
}

$conn = null;
?>