<?php 
include 'connection.php';

$idSetor = $_GET['idSetor'];

try{
    $sql = "DELETE FROM setor WHERE idSetor = '$idSetor'";
    $sql = $conn->exec($sql);
    echo "<script>('Setor deletado com sucesso!');window.location.href='../../view/setor.php'</script>";
    
}catch(PDOException $e){
    echo "Error: " . $e->getMEssage();
}

$conn = null;
?>