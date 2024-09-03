$(document).on('click', '.eliminar', function () {
    var id = $(this).data('id');

    $.ajax({
        url: 'eliminar_usuario.php',
        type: 'DELETE',
        data: {
            id: id
        },
        success: function (response) {
            location.reload();
        },
        error: function (xhr, status, error) {
            console.log("Error: " + error);
        }
    });
});
