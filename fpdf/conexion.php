<?php
$host = "localhost";
$user = "root"; // Cambia si tienes un usuario diferente
$password = "admin"; // Cambia si tienes una contraseña
$dbname = "compras_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
