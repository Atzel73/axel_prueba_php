<!-- Si hay usuario: muestra lista de usuarios/ sino, muestra el inicio de sesion -->
<?php
include 'config.php';
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: form_login.php");
    exit();
}
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
            <button class="header-index-button" onclick="location.href='form_agregar_usuario.php'">Agregar nuevo contacto</button>
        </div>
        <div class="div-header-index">
            <img src="ElementosSitioiStrategy/LOGO-iSTRATEGY-.png" alt="Logo" class="img-logo-index">
        </div>
    </header>

    <main class="container-table-users">
        <aside class="aside-index">

        </aside>
        <table id="tablaUsuarios">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th>TELEFONO</th>
                <th>GENERO</th>
                <th>FECHA DE UNION</th>
                <th>ACCIONES</th>
            </tr>
            <tbody>
                <?php
                foreach ($result as $usuario) {
                    echo "<tr>
                            <td>{$usuario['id']}</td>
                            <td>{$usuario['nombre_usuario']}</td>
                            <td>{$usuario['email']}</td>
                            <td>{$usuario['numero_telefono']}</td>
                            <td>{$usuario['genero']}</td>
                            <td>{$usuario['creado_en']}</td>
                            <td> 
                            <a class='eliminar' data-id='{$usuario['id']}' id='eliminar'><img src='ElementosSitioiStrategy/icono basura-8.png' alt='basura' class='icono-borrar'></a>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>

    </main>
</body>
<script src="js/eliminar_usuario.js"></script>

</html>