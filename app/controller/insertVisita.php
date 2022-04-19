<?php 
// include 'validalogin.php';
include 'connection.php';
session_start();

$coordenador = $_SESSION['cpf'];
$qtAluno = $_POST['qtAluno'];
$conteudoDia = $_POST['conteudoDia'];
$nomeProf = $_POST['nomeProf'];
$telProf = $_POST['telProf'];
$dataVisita = $_POST['dataVisita'];
$dataAtual= date("Y-m-d");
var_dump($dataVisita);
var_dump($dataAtual);

if($dataVisita == $dataAtual){
    try{
        $conn->beginTransaction();
        $conn->exec("INSERT INTO visita (coordenador, qtAluno, conteudoDia, nomeProf, telProf, dataVisita, dataCadastro) VALUES ('$coordenador', '$qtAluno', '$conteudoDia', '$nomeProf', '$telProf', '$dataVisita', NOW())");
        $conn->commit();
        echo "<script>alert('Visita cadastrada com sucesso!');window.location.href='../../view/visita.php';</script>";


    }catch(PDOException $e){
        $conn->rollBack();
        echo "Error: " . $e->getMessage();    
    }
}else{
    echo "Data de visita inválida";
}
$conn = null;
?>