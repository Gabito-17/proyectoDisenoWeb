<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];

$stmt = $conn->prepare("INSERT INTO personas (nombre, email) VALUES (?, ?)");
$stmt->bind_param("ss", $nombre, $email);

if ($stmt->execute() === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
