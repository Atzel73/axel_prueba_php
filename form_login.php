<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

</head>

<body class="body-form-login">

    <div class="form-login">
        <header class="header-form-login">
            <div class="div-form-login">
                <h1>Iniciar sesión</h1>
            </div>
            <div class="div-form-login">
                Ingresa tus datos a continuación
            </div>
        </header>
        <main>
            <form id="loginForm" action="script _inicio_sesion.php" method="POST">
                <div class="div-form-inputs">
                    <label for="email">Correo Electrónico</label>
                    <input type="text" name="email" id="email" placeholder="Ingrese el Correo">
                </div>
                <div class="div-form-inputs">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" name="contrasena" id="contrasena" placeholder="Introduzca Contraseña">
                </div>
                <div>
                    <input type="checkbox" name="recordar" id="recordar">
                    <label for="recordar">Mantenerme Conectado</label>
                </div>
                <div class="div-form-submit">
                    <input type="submit" value="Iniciar Sesión">
                </div>
            </form>
        </main>
    </div>
</body>
<script src="js/iniciar_sesion_usuario.js"></script>

</html>