<?php

include 'connection.php';

$nome = $_POST['nome'];
$responsavel = $_POST['responsavel'];
$localidade = $_POST['localidade'];

try{
    $conn->beginTransaction();
    $conn->exec("INSERT INTO escola (nome_escola, responsavel, localidade) VALUES ('$nome', '$responsavel', '$localidade')");
    $conn->commit();
    echo "<script>alert('Escola cadastrada com sucesso.');window.location.href='../../view/cadEscola.php';</script>";
    
}catch(PDOException $e){
    $conn->rollBack();
    echo "Error: " . $e->getMessage();  
}

$conn = null;
?>