
$(document).ready(function () {

    function cargarUsuarios() {
        $.ajax({
            url: 'script_obtener_usuarios.php',
            type: 'GET',
            dataType: 'json',

            error: function (xhr, status, error) {
                console.error('Error en la solicitud AJAX:', status, error);
            }
        });
    }

    cargarUsuarios();
});
