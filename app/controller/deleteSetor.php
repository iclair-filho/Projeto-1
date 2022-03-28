<?php 
include 'connection.php';

$idSetor = $_POST['idSetor'];

try{
    $sql = "DELETE FROM setor WHERE idSetor = '$idSetor'";
    $sql = $conn->exec($sql);
    echo "<script>alert('Setor deletado com sucesso!');window.location.href='../../view/cadSetor.php'</script>";
    
}catch(PDOException $e){
    echo "Error: " . $e->getMEssage();
}

$conn = null;
?>