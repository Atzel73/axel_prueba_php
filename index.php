<!-- Si hay usuario: muestra lista de usuarios/ sino, muestra el inicio de sesion -->
<?php
include 'config.php';
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

</head>

<body>
    <header>
        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="logo de google">
    </header>
    <main>

        <table id="tablaUsuarios">

            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CORREO ELECTRONICO</th>
                <th>GENERO</th>
                <th>FECHA DE UNION</th>
            </tr>
            <tbody>
                <?php
                foreach ($result as $usuario) {
                    echo "<tr>
                            <td>{$usuario['id']}</td>
                            <td>{$usuario['nombre_usuario']}</td>
                            <td>{$usuario['email']}</td>
                            <td>{$usuario['genero']}</td>
                            <td>{$usuario['creado_en']}</td>
                        </tr>";
                }
                ?>
            </tbody>

        </table>

    </main>
</body>
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'api.php',
            type: 'GET',
            succes: function(usuarios) {
                usuarios.forEach(function(usuario) {
                    $('#tablaUsuarios').append(
                        `<tr>
                        <td>${usuario.id}</td>
                        <td>${usuario.nombre_usuario}</td>
                        <td>${usuario.email}</td>
                         <td>${usuario.genero}</td>
                        <td>${usuario.creado_en}</td>
                    </tr>`
                    )
                })
            }
        })
    })
</script>

</html>