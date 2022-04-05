<?php 
include 'connection.php';

// $coordenador = $_POST['coordenador'];
$qtAluno = $_POST['qtAluno'];
$conteudoDia = $_POST['conteudoDia'];
$nomeProf = $_POST['nomeProf'];
$telProf = $_POST['telProf'];
$dataVisita = $_POST['dataVisita'];

try{
    $conn->beginTransaction();
    $conn->exec("INSERT INTO visita (coordenador, qtAluno, conteudoDia, nomeProf, telProf, dataVisita, dataCadastro) VALUES ('$coordenador', '$qtAluno', '$conteudoDia', '$nomeProf', '$telProf', '$dataVisita', NOW())");
    $conn->commit();
    echo "<script>alert('Visita cadastrada com sucesso!');window.location.href='../../view/visita.php';</script>";


}catch(PDOException $e){
    $conn->rollBack();
    echo "Error: " . $e->getMessage();    
}

$conn = null;
?>