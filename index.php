<?php
include 'config.php';
session_start();

if (!isset($_SESSION['login_user'])) {
    header("location: form_login.php");
    exit();
}

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios registrados</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body class="body-index">
    <header class="header-index">
        <div class="div-header-index">
            <?php if (isset($_SESSION['login_user'])) : ?>
                <button class="header-index-button" onclick="location.href='form_agregar_usuario.php'">Agregar nuevo contacto</button>
            <?php endif; ?>
        </div>
        <div class="div-header-index">
            <img src="ElementosSitioiStrategy/LOGO-AVION-ROJO-iSTRATEGY.png" alt="Logo" class="img-logo-index-main">
        </div>
        <div class="div-header-index">
            <form action="script_cerrar_sesion.php" method="POST">
                <button class="header-index-button" type="submit">Cerrar sesión</button>
            </form>
        </div>
    </header>

    <main class="container-table-users">
        <table id="tablaUsuarios">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th>GENERO</th>
                <th>FECHA DE UNION</th>
                <th>ACCIONES</th>
            </tr>
            <tbody>
                <?php if ($result && $result->rowCount() > 0): ?>
                    <?php
                    while ($usuario = $result->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td><?php echo $usuario['id']; ?></td>
                            <td><?php echo $usuario['nombre_usuario']; ?></td>
                            <td><?php echo $usuario['email']; ?></td>
                            <td><?php echo $usuario['genero']; ?></td>
                            <td><?php echo $usuario['creado_en']; ?></td>
                            <td class="td-actions">
                                <a class='eliminar' data-id='<?php echo $usuario['id']; ?>' id='eliminar'><img src='ElementosSitioiStrategy/icono basura-8.png' alt='basura' class='icono-borrar'></a>
                                <a href="editar_usuario.php?id=<?php echo $usuario['id'] ?>" class='editar' id='editar'><img src='ElementosSitioiStrategy/icono pluma-8.png' alt='lapiz' class='icono-borrar'></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6"> No hay usuarios registrados</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </main>

    <script src="js/eliminar_usuario.js"></script>
</body>

</html>