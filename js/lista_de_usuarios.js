$(document).ready(function () {
    $.ajax({
        url: '/api.php',
        type: 'GET',
        succes: function (usuarios) {
            usuarios.forEach(function (usuario) {
                $('#tablaUsuarios').append(
                    `<tr>
                    <td>${usuario.id}</td>
                    <td>${usuario.nombre_usuario}</td>
                    <td>${usuario.email}</td>
                     <td>${usuario.genero}</td>
                    <td>${usuario.creado_en}</td>
                </tr>`
                )
            })
        }
    })
})