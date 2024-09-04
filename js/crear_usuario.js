const form = document.getElementById('formUser');

$(form).submit(function (e) {
    e.preventDefault();
    const nombre_usuario = $('#nombre').val();
    const email = $('#email').val();
    const genero = $('input[name="genero"]:checked').val();
    const contrasena = $('#contrasena').val();


    $.ajax({
        url: './script_registrar_usuario.php',
        type: 'POST',
        data: {
            nombre: nombre_usuario,
            email: email,
            genero: genero,
            contrasena: contrasena
        },
        success: function (response) {
            location.reload();
            alert("Usuario creado exitosamente");
            window.location.href = 'index.php';
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
            alert('Hubo un problema al procesar tu solicitud. Por favor, intenta de nuevo.');
        }
    });
});