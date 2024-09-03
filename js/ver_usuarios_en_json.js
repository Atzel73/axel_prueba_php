//Este script es para mostrar los usuarios en json. obtener_usuarios.php
$(document).ready(function () {

    function cargarUsuarios() {
        $.ajax({
            url: 'obtener_usuarios.php',
            type: 'GET',
            dataType: 'json',

            error: function (xhr, status, error) {
                console.error('Error en la solicitud AJAX:', status, error);
            }
        });
    }

    cargarUsuarios();
});
