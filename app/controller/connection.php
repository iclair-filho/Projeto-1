<?php 
include "config.php";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    //PDO error no modo exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>