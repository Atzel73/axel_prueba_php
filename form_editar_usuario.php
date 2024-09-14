<?php
include 'config.php';

session_start();
if (!isset($_SESSION['login_user'])) {
    echo "No se ha iniciado sesión";
    header("location: form_login.php");
    exit();
}
$id = $_GET['id'];
$nombre_usuario = "";
$email  = "";
$genero = "";
$errors = [];

$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $conn->query($sql);
$user = $result->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre_usuario"])) {
        $errors[] = "El nombre es obligatorio.";
    } else {
        $nombre_usuario = $_POST["nombre_usuario"];
    }

    if (empty($_POST["email"])) {
        $errors[] = "El email es obligatorio.";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["genero"])) {
        $errors[] = "El genero es obligatorio.";
    } else {
        $genero = $_POST["genero"];
    }

    if (empty($errors)) {
        $sql = "UPDATE usuarios SET nombre_usuario='$nombre_usuario', email='$email' WHERE id=$id";
        if ($conn->query($sql)) {
            echo "usuario editado";
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->errorCode();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body class="body-agregar-usuario">

    <main class="main-agregar-usuario">
        <aside class="social-links">
            <a href="https://facebook.com/istrategy" target="_blank"><img src="ElementosSitioiStrategy/redes 1.png" class="img-logo-index"></a>
            <a href="#" target="_blank"><img src="ElementosSitioiStrategy/redes 2.png" class="img-logo-index"></a>
            <a href="#" target="_blank"><img src="ElementosSitioiStrategy/redes 3.png" class="img-logo-index"></a>
        </aside>
        <section class="flotante">
            <?php if (!empty($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <form id="formUser" class="form-agregar-usuario" action="form_editar_usuario.php?id=<?php echo $id ?>" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <section class="form-icon-input">
                        <img src="ElementosSitioiStrategy/ICONO 1.PNG" alt="Logo" class="img-logo-index">
                        <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-input" value="<?php echo $user['nombre_usuario']; ?>">
                    </section>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <section class="form-icon-input">
                        <img src="ElementosSitioiStrategy/ICONO 2.PNG" alt="Logo" class="img-logo-index">
                        <input type="email" name="email" id="email" class="form-input" value="<?php echo $user['email']; ?>">
                    </section>
                </div>

                <!-- Género -->
                <div class="form-group">
                    <h3>Género</h3>
                </div>
                <div class="form-group radio-group">
                    <input type="radio" name="genero" id="masculino" value="masculino" class="form-radio" <?php if ($user['genero'] == 'masculino') echo 'checked'; ?>>
                    <label for="masculino">Masculino</label>
                </div>
                <div class="form-group radio-group">
                    <input type="radio" name="genero" id="femenino" value="femenino" class="form-radio" <?php if ($user['genero'] == 'femenino') echo 'checked'; ?>>
                    <label for="femenino">Femenino</label>
                </div>

                <!-- Botón para guardar los cambios -->
                <div class="form-group">
                    <button type="submit" class="form-submit">Guardar</button>
                </div>
            </form>


            <figure>
                <img src="ElementosSitioiStrategy/foto.jpg" alt="Imagen representativa" class="flotante-img">
            </figure>
        </section>
    </main>

</body>

</html>