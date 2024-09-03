<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div>
            <h1>Iniciar sesión</h1>
        </div>
        <div>
            Ingresa tus datos a continuación
        </div>
    </header>
    <main>
        <form id="loginForm" action="script_inicio_sesion.php" method="POST">
            <div>
                <label for="email">Correo Electrónico</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena">
            </div>
            <div>
                <input type="checkbox" name="recordar" id="recordar">
                <label for="recordar">Mantenerme Conectado</label>
            </div>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </main>

</body>
<script src="js/iniciar_sesion_usuario.js"></script>

</html>