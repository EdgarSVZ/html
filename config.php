<?php
$servername = "localhost";
$username = "root"; // Cambia esto si usas un usuario diferente
$password = ""; // Cambia esto si tu base de datos tiene una contraseña
$dbname = "estudiantes";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
