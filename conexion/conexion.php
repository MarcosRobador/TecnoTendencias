<?php
$servername = "localhost"; //Host local
$username = "root"; // El nombre de usuario de la base de datos
$password = ""; // No tengo contraseña
$database = "TecnoTendencias"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Cerrar conexión
$conn->close();
