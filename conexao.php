<?php
$host = "localhost";
$user = "root";
$pass = "123456";
$db = "porto";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>
