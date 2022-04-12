<?php
session_start();

if(isset($_SESSION['cpf']) && !empty($_SESSION['cpf'])){
}else{
    header('Location: ../../index.html');
}

?>