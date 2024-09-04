<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre_usuario = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $genero = htmlspecialchars($_POST['genero']);
    $numero_telefono = htmlspecialchars($_POST['numero_telefono']);
    $contrasena = $_POST['contrasena'];


    if (empty($email) || empty($contrasena)) {
        echo json_encode(['status' => 'error', 'message' => 'Email y contraseña son obligatorios.']);
        exit;
    }


    $hashed_password = password_hash($contrasena, PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre_usuario, email, genero, numero_telefono, contrasena) VALUES (?, ?, ?, ?,?)");


    if ($stmt->execute([$nombre_usuario, $email, $genero, $numero_telefono, $hashed_password])) {
        echo json_encode(['status' => 'success', 'message' => 'Usuario agregado con éxito']);
    } else {
        $errorInfo = $stmt->errorInfo();
        echo json_encode(['status' => 'error', 'message' => 'Error al agregar el usuario: ' . $errorInfo[2]]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método de solicitud no válido']);
}
