<?php
include 'connection.php';

$setor = $_POST['setor'];
$localidade = $_POST['localidade'];

try{
    $conn->beginTransaction();
    $conn->exec("INSERT INTO setor (setor, localidade) VALUES ('$setor', '$localidade')");
    $conn->commit();
    echo "<script>alert('Setor cadastrado com sucesso!');window.location.href='../../view/setor.php';</script>";
    
}catch(PDOException $e){
    $conn->rollBack();
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>