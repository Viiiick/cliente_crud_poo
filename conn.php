<?php 
$host = "localhost";
$user = "root";
$password = "";
$db_name = "login";

try {
    $conn = mysqli_connect($host, $user, $password, $db_name);
} catch (Exception $e) {
    die("Erro na conexão: $e");
}
?>