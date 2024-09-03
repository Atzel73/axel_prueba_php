<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
</head>

<body>
    <header>
        <div>
            <h1>Iniciar sesion</h1>
        </div>
        <div>
            Ingresa tus datos a continuacion
        </div>
    </header>
    <main>
        <form>
            <div>
                <label for="email">Correo Electronico</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="checkbox" name="recordar" id="recordar">
                <label for="recordar">Mantenme Conectado</label>
            </div>
        </form>
        <input type="submit" value="Iniciar Sesion">
    </main>
</body>

</html>