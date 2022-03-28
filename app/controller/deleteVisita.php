<?php 
include 'connection.php';

$idVisita = $_POST['idVisita'];

try{
    $sql = "DELETE FROM visita WHERE idVisita = '$idVisita'";
    $sql = $conn->exec($sql);
    echo "<script>alert('Usuário deletado com sucesso!');window.location.href='../../view/cadVisita.php'</script>";
    
}catch(PDOException $e){
    echo "Error: " . $e->getMEssage();
}

$conn = null;
?>