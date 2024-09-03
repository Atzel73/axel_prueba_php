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
        <form id="loginForm" action="api_inicio_sesion.php" method="POST">
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

    <script>
        $(document).ready(function() {
            $("#loginForm").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();
                console.log("Datos del formulario:", formData);

                $.ajax({
                    url: $(this).attr('action'),
                    method: "POST",
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        console.log("Respuesta del servidor:", response);
                        if (response.status === "success") {
                            window.location.href = "index.php";
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log("Error en la solicitud AJAX:", error);
                        console.log("Respuesta del servidor:", xhr.responseText);
                        alert("Error al iniciar sesión. Por favor, inténtalo de nuevo.");
                    }
                });
            });
        });
    </script>
</body>

</html>