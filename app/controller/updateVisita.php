<?php
include "connection.php";

$idVisita = $_POST['idVisita'];
$escola = $_POST['nomeEscola'];
$coordenador = $_POST['coordenador'];
$qtAluno = $_POST['qtAluno'];
$conteudoDia = $_POST['conteudoDia'];
$nomeProf = $_POST['nomeProf'];
$telProf = $_POST['telProf'];
$dataVisita = $_POST['dataVisita'];

try{
    $sql = "UPDATE visita SET nomeEscola = '$escola', coordenador = '$coordenador', qtAluno = '$qtAluno', conteudoDia = '$conteudoDia', nomeProf = '$nomeProf', telProf = '$nomeProf', datavisita = '$dataVisita' WHERE idVisita = '$idVisita'";
    $sql = $conn->prepare($sql);
    $sql->execute();

    $resultUpdate = $sql->rowCount();
    echo "<script>alert('Visita atualizada com sucesso!');window.location.herf='../../view/visita.php';</script>";

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>