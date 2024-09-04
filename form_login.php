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

    <section class="form-login">
        <header class="header-form-login">
            <div class="div-form-login">
                <img src="ElementosSitioiStrategy/LOGO-iSTRATEGY-.png" alt="Logo">
                <h1>Iniciar sesión</h1>
            </div>
            <div class="div-form-login">
                <h3>Ingresa tus datos a continuación</h3>
            </div>
        </header>
        <main class="main-form">
            <form id="loginForm" action="script_inicio_sesion.php" method="POST">
                <div class="div-form-inputs">
                    <label for="email" class="names">Correo Electrónico</label>
                    <input type="text" name="email" id="email" placeholder="Ingrese el Correo">
                </div>
                <div class="div-form-inputs">
                    <label for="contrasena" class="names">Contraseña</label>
                    <input type="password" name="contrasena" id="contrasena" passwoolder="Introduzca Contraseña">
                </div>
                <div class="div-form-checkbox">
                    <input type="checkbox" name="recordar" id="recordar">
                    <label for="recordar" class="names">Mantenerme Conectado</label>
                </div>
                <div class="div-form-submit">
                    <input type="submit" value="Iniciar Sesión">
                </div>
            </form>
        </main>
    </section>
</body>
<script src="js/iniciar_sesion_usuario.js"></script>

</html>