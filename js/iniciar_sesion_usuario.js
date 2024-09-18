$(document).ready(function () {
    $("#loginForm").submit(function (event) {
        event.preventDefault();

        var formData = $(this).serialize();


        $.ajax({
            url: $(this).attr('action'),
            method: "POST",
            data: formData,
            dataType: 'json',
            success: function (response) {
                if (response.status === "success") {
                    alert("Inicio de sesión exitoso");
                    window.location.href = "index.php";
                } else {
                    alert("Usuario o contraseña incorrectos.");
                }
            },
            error: function (xhr, status, error) {
                console.log("Error en la solicitud AJAX:", error);
                console.log("Respuesta del servidor:", xhr.responseText);
                alert("Error al iniciar sesión. Por favor, inténtalo de nuevo.");
            }
        });
    });
});