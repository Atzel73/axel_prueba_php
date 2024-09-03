<?php
include 'config.php';

$nombre_usuario = "";
$email = "";
$genero = "";
$contrasena = "";
$contrasena_confirm = "";
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_usuario = $_POST['nombre'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $contrasena = $_POST['contrasena'];
    $contrasena_confirm = $_POST['contrasena_confirm'];

    if (empty($nombre_usuario) || empty($email) || empty($contrasena) || empty($contrasena_confirm) || empty($genero)) {
        $errors[] = "Todos los campos son obligatorios";
    } else {
        if ($contrasena != $contrasena_confirm) {
            $errors[] = "Las contraseñas no coinciden";
        } else {
            $stmt = $conn->prepare("INSERT INTO usuarios (nombre_usuario, email, genero, contrasena) VALUES (?, ?, ?, ?)");
            $stmt->execute([$nombre_usuario, $email, $genero, $contrasena]);
            echo "Usuario agregado con éxito";
        }
    }
}
