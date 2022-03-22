<?php 
include 'connection.php';

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];


    
    $sql = "SELECT cpf, senha FROM usuarios WHERE cpf = '$cpf' AND senha = $senha";
    $resultado = $conn->query($sql);
   
    if($resultado->num_rows==1){
        
        
        echo "<script>alert('Usuario autenticado com sucesso');window.location.href='../../view/dashboard.html'</script>";
        
        

    }else{
        echo "<script>alert('Acesso negado');window.location.href='../../index.html'</script>";
    }

 