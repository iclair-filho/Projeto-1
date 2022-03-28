<?php 
include 'connection.php';

$idEscola = $_POST['idEscola'];

try{
    $sql = "DELETE FROM escola WHERE idEscola = '$idEscola'";
    $sql = $conn->exec($sql);
    echo "<script>alert('Usuário deletado com sucesso!');window.location.href='../../view/cadEscola.php'</script>";

}catch(PDOException $e){
    echo "Error: " . $e->getMEssage();
}

$conn = null;
?>