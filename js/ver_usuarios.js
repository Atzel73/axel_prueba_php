$(document).ready(function () {

    function cargarUsuarios() {
        $.ajax({
            url: 'obtener_usuarios.php',
            type: 'GET',
            dataType: 'json',
            success: function (usuarios) {

                if (Array.isArray(usuarios)) {

                    $('#tablaUsuarios').find('tr:gt(0)').remove();


                    usuarios.forEach(function (usuario) {
                        $('#tablaUsuarios').append(
                            `<tr>
                                <td>${usuario.id}</td>
                                <td>${usuario.nombre_usuario}</td>
                                <td>${usuario.email}</td>
                                <td>${usuario.genero}</td>
                                <td>${usuario.creado_en}</td>
                            </tr>`
                        );
                    });
                } else {
                    console.error('La respuesta no es un array de usuarios');
                }
            },
            error: function (xhr, status, error) {
                console.error('Error en la solicitud AJAX:', status, error);
            }
        });
    }

    cargarUsuarios();
});
