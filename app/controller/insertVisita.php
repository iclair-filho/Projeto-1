<?php 
include 'connection.php';

$coordenador = $_POST['coordenador'];
$qtAluno = $_POST['qtAluno'];
$contDia = $_POST['contDia'];
$nomeProf = $_POST['nomeProf'];
$telProf = $_POST['telProf'];
$dataVisita = $_POST['dataVisita'];

try{
    $conn->beginTransaction();
    $conn->exec("INSERT INTO visita (coordenador, qtAluno, conteudoDia, nomeProf, telProf, dataVisita, dataCadastro) VALUES ('$coordenador', '$qtAluno', '$contDia', '$nomeProf', '$telProf', '$dataVisita', NOW())");
    $conn->commit();
    echo "<script>alert('Visita cadastrada com sucesso!');window.location.href='../../view/cadVisita.php';</script>";


}catch(PDOException $e){
    $conn->rollBack();
    echo "Error: " . $e->getMessage();    
}

$conn = null;
?>