<?php
session_start();
include 'config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['contrasena'])) {
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];

        $stmt = $conn->prepare("SELECT id, contrasena FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            if (password_verify($contrasena, $result['contrasena'])) {
                $_SESSION['login_user'] = $result['id'];
                echo json_encode(['status' => 'success', 'message' => 'Inicio de sesión exitoso']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Correo electrónico o contraseña incorrectos']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Correo electrónico no encontrado']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Por favor, completa todos los campos.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método de solicitud no válido']);
}
