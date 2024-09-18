<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre_usuario = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $genero = htmlspecialchars($_POST['genero']);
    $contrasena = $_POST['contrasena'];

    if (empty($email) || empty($contrasena)) {
        echo json_encode(['status' => 'error', 'message' => 'Email y contraseña son obligatorios.']);
        exit;
    }


    $stmt = $conn->prepare("SELECT COUNT(*) FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $emailCount = $stmt->fetchColumn();

    if ($emailCount > 0) {
        echo json_encode(['status' => 'error', 'message' => 'El correo electrónico ya está registrado.']);
        exit;
    }

    $hashed_password = password_hash($contrasena, PASSWORD_BCRYPT);


    $stmt = $conn->prepare("INSERT INTO usuarios (nombre_usuario, email, genero, contrasena) VALUES (?, ?, ?, ?)");

    if ($stmt->execute([$nombre_usuario, $email, $genero, $hashed_password])) {
        echo json_encode(['status' => 'success', 'message' => 'Usuario agregado con éxito']);
    } else {
        $errorInfo = $stmt->errorInfo();
        echo json_encode(['status' => 'error', 'message' => 'Error al agregar el usuario: ' . $errorInfo[2]]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método de solicitud no válido']);
}
