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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar usuario</title>
</head>

<body>
    <header>
        <div>
            <h1>Agregar usuario</h1>
        </div>
        <div>
            Ingresa tus datos a continuacion
        </div>
    </header>
    <main>
        <?php if (!empty($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <form action="agregar_usuario.php" method="POST">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo $nombre_usuario; ?>" />
            </div>
            <div>
                <label for="email">Correo Electronico</label>
                <input type="text" name="email" id="email" value="<?php echo $email; ?>" />
            </div>
            <div>
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena" value="<?php echo $contrasena; ?>" />
            </div>
            <div>
                <label for="contrasena_confirm">Confirmar contraseña</label>
                <input type="password" name="contrasena_confirm" id="contrasena_confirm" value="<?php echo $contrasena_confirm; ?>" />
            </div>
            <div>
                <h3>Género</h3>
            </div>
            <div>
                <input type="radio" name="genero" id="masculino" value="masculino" <?php echo ($genero == 'masculino') ? 'checked' : ''; ?> />
                <label for="masculino">Masculino</label>
            </div>
            <div>
                <input type="radio" name="genero" id="femenino" value="femenino" <?php echo ($genero == 'femenino') ? 'checked' : ''; ?> />
                <label for="femenino">Femenino</label>
            </div>

            <div>
                <input type="checkbox" name="recordar" id="recordar" />
                <label for="recordar">Mantenme Conectado</label>
            </div>
            <div>
                <input type="submit" name="guardar" id="guardar" placeholder="Guardar" />
                <input type="submit" name="cancelar" id="cancelar" placeholder="Cancelar" />
            </div>
        </form>
        <input type="submit" value="Iniciar Sesion">
    </main>
</body>

</html>