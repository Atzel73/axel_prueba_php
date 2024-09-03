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

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $id = $_DELETE['id'];

    
    if (!empty($id)) {
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
        if ($stmt->execute([$id])) {
            echo json_encode(["message" => "Usuario eliminado con éxito"]);
        } else {
            echo json_encode(["error" => "Error al eliminar el usuario: " . $stmt->errorInfo()[2]]);
        }
    } else {
        echo json_encode(["error" => "ID inválido"]);
    }
}
