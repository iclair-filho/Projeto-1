<?php 
include 'connection.php';

$idUsuario = $_GET['idUsuario'];

try{
    $sql = "DELETE FROM usuario WHERE idUsuario = '$idUsuario'";
    $sql = $conn->exec($sql);
    echo "<script>alert('Usuário deletado com sucesso!');window.location.href='../../view/usuario.php'</script>";
    
}catch(PDOException $e){
    echo "Error: " . $e->getMEssage();
}

$conn = null;
?>