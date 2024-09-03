<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_usuario = $_POST['nombre'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $contrasena = $_POST['contrasena'];

    var_dump($_POST);

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre_usuario, email, genero, contrasena) VALUES (?, ?, ?, ?)");

    if ($stmt->execute([$nombre_usuario, $email, $genero, $contrasena])) {
        echo "Usuario agregado con éxito";
    } else {
        echo "Error al agregar el usuario: " . $stmt->errorInfo()[2];
    }
}
