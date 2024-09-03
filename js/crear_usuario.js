const form = document.getElementById('userForm');

$(form).submit(function (e) {
    e.preventDefault();
    const formData = new FormData(form);
    const data = Object.fromEntries(formData);
    console.log(data);
    $.ajax({
        url: '/api.php',
        type: id ? 'PUT' : 'POST',
        data: data,
        success: function (response) {
            console.log(response);
            location.reload();
        },
        error: function (error) {
            console.log(error);
        }
    });
});