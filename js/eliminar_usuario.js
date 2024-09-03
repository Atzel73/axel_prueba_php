$(document).on('click', '.eliminar', function () {
    var id = $(this).data('id');

    $.ajax({
        url: 'api.php',
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
