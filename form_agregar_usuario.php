<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    echo "No se ha iniciado sesión";
    header("location: form_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar usuario</title>
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

            <form id="formUser" class="form-agregar-usuario">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <section class="form-icon-input">
                        <img src="ElementosSitioiStrategy/ICONO 1.PNG" alt="Logo" class="img-logo-index">
                        <input type="text" name="nombre" id="nombre" class="form-input">
                    </section>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <section class="form-icon-input">
                        <img src="ElementosSitioiStrategy/ICONO 2.PNG" alt="Logo" class="img-logo-index">
                        <input type="text" name="email" id="email" class="form-input">
                    </section>
                </div>
                <div class="form-group">
                    <label for="contrasena">Contraseña</label>
                    <section class="form-icon-input">
                        <img src="ElementosSitioiStrategy/ICONO 3.PNG" alt="Logo" class="img-logo-index">
                        <input type="password" name="contrasena" id="contrasena" class="form-input">
                    </section>
                </div>
                <div class="form-group">
                    <label for="contrasena_confirm">Confirmar contraseña</label>
                    <section class="form-icon-input">
                        <img src="ElementosSitioiStrategy/ICONO 4.PNG" alt="Logo" class="img-logo-index">
                        <input type="password" name="contrasena_confirm" id="contrasena_confirm" class="form-input">
                    </section>

                </div>
                <div class="form-group">
                    <h3>Género</h3>
                </div>
                <div class="form-group radio-group">
                    <input type="radio" name="genero" id="masculino" value="masculino" class="form-radio">
                    <label for="masculino">Masculino</label>
                </div>
                <div class="form-group radio-group">
                    <input type="radio" name="genero" id="femenino" value="femenino" class="form-radio">
                    <label for="femenino">Femenino</label>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-submit">Guardar</button>
                </div>
            </form>
            <figure>
                <img src="ElementosSitioiStrategy/foto.jpg" alt="Imagen representativa" class="flotante-img">
               
            </figure>
        </section>
    </main>
    <script src="js/crear_usuario.js"></script>
</body>

</html>