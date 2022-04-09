<?php 
include 'connection.php';

$idEscola = $_GET['idEscola'];

try{
    $sql = "DELETE FROM escola WHERE idEscola = '$idEscola'";
    $sql = $conn->exec($sql);
    echo "<script>alert('Escola deletada com sucesso!');window.location.href='../../view/escola.php'</script>";

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>