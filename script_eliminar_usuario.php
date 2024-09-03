<?php
include 'config.php';

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
