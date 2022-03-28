<?php 
include 'connection.php';

$idUsuario = $_POST['idUsuario'];

try{
    $sql = "DELETE FROM usuario WHERE idUsuario = '$idUsuario'";
    $sql = $conn->exec($sql);
    echo "<script>alert('Usuário deletado com sucesso!');window.location.href='../../view/cadUsuario.php'</script>";
    
}catch(PDOException $e){
    echo "Error: " . $e->getMEssage();
}

$conn = null;
?>