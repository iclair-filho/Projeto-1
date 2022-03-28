<?php
include "connection.php";

$idVisita = $_POST['idVisita'];
$coordenador = $_POST['coordenador'];
$qtAluno = $_POST['qtAluno'];
$conteudoDia = $_POST['conteudoDia'];
$nomeProf = $_POST['nomeProf'];
$telProf = $_POST['telProf'];
$dataVisita = $_POST['dataVisita'];

try{
    $sql = "UPDATE visita SET coordenador = '$coordenador', qtAluno = '$qtAluno', conteudoDia = '$conteudoDia', nomeProf = '$nomeProf', telProf = '$nomeProf', datavisita = '$dataVisita' WHERE idVisita = '$idVisita'";
    $sql = $conn->prepare($sql);
    $sql->execute();

    $resultUpdate = $sql->rowCount();
    echo "<script>alert('Visita atualizada com sucesso!');window.location.herf='../../view/cadVisita.php';</script>";

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>