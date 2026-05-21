<?php
$host = "localhost"; 
$user="empresa_user";
$pass="mathey08";
$db="empresa";

$conn = new mysqli($host, $user, $pass, $db);

if($conn -> connect_error){
    die("Coneccion fallida: " . $conn->connect_error);
}
?>