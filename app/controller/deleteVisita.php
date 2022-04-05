<?php 
include 'connection.php';

$idVisita = $_GET['idVisita'];

try{
    $sql = "DELETE FROM visita WHERE idVisita = '$idVisita'";
    $sql = $conn->exec($sql);
    echo "<script>alert('Visita deletado com sucesso!');window.location.href='../../view/visita.php'</script>";
    
}catch(PDOException $e){
    echo "Error: " . $e->getMEssage();
}

$conn = null;
?>