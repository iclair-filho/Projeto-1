<?php
include 'config.php';

$conn = new mysqli($servename, $username, $pass, $dbase);

if($conn->connect_error){
    die("Connection failed.") . $conn->connect_error;
}
?>