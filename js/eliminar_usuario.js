$(document).on('click', '.eliminar', function () {
    var id = $(this).data('id');

    $.ajax({
        url: 'script_eliminar_usuario.php',
        type: 'DELETE',
        data: {
            id: id
        },
        success: function (response) {
            location.reload();
            alert("Usuario eliminado exitosamente");
        },
        error: function (xhr, status, error) {
            console.log("Error: " + error);
        }
    });
});
