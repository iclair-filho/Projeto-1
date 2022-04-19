<?php 
// include 'validalogin.php';
include 'connection.php';
session_start();

$coordenador = $_SESSION['cpf'];

$idSetor = $_POST['setor'];
$idEscola = $_POST['nomeEscola'];
$qtAluno = $_POST['qtAluno'];
$conteudoDia = $_POST['conteudoDia'];
$nomeProf = $_POST['nomeProf'];
$telProf = $_POST['telProf'];
$dataVisita = $_POST['dataVisita'];


try{
    $conn->beginTransaction();
    $conn->exec("INSERT INTO visita (idSetor, idEscola, coordenador, qtAluno, conteudoDia, nomeProf, telProf, dataVisita, dataCadastro) VALUES ('$idSetor', '$idEscola','$coordenador', '$qtAluno', '$conteudoDia', '$nomeProf', '$telProf', '$dataVisita', NOW())");
    $conn->commit();
    echo "<script>alert('Visita cadastrada com sucesso!');window.location.href='../../view/visita.php';</script>";

    }catch(PDOException $e){
        $conn->rollBack();
        echo "Error: " . $e->getMessage();    
    }
$conn = null;
?>