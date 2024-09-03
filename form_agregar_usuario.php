<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar usuario</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
        <form id="formUser">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div>
                <label for="email">Correo Electronico</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena">
            </div>
            <div>
                <label for="contrasena_confirm">Confirmar contraseña</label>
                <input type="password" name="contrasena_confirm" id="contrasena_confirm">
            </div>
            <div>
                <h3>Género</h3>
            </div>
            <div>
                <input type="radio" name="genero" id="masculino" value="masculino">
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
    <script src="js/crear_usuario.js"></script>
</body>

</html>