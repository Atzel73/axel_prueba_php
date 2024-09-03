<?php
include 'config.php';


$id = isset($_GET['id']) ? intval($_GET['id']) : 0;


$sql = "SELECT * FROM `usuarios` WHERE id = 9";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


if (count($result) > 0) {
    $task = $result[0];
} else {
    echo "Usuario no encontrado";
    exit;
}


$stmt = null; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <main>
        <form id="formUser">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo htmlspecialchars($task['nombre_usuario']); ?>">
            </div>
            <div>
                <label for="email">Correo Electronico</label>
                <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($task['email']); ?>">
            </div>
            <div>
                <h3>Género</h3>
            </div>
            <div>
                <input type="radio" name="genero" id="masculino" value="masculino" >
                <label for="masculino">Masculino</label>
            </div>
            <div>
                <input type="radio" name="genero" id="femenino" value="femenino">
                <label for="femenino">Femenino</label>
            </div>
            <div>
                <button type="submit">Guardar</button>
            </div>

        </form>
    </main>
</body>

</html>