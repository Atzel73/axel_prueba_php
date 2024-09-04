const form = document.getElementById('formUser');

$(form).submit(function (e) {
    e.preventDefault();
    const nombre_usuario = $('#nombre').val();
    const email = $('#email').val();
    const genero = $('input[name="genero"]:checked').val();
    const numero_telefono = $('#numero_telefono').val();
    const contrasena = $('#contrasena').val();
    
    if (!nombre_usuario || !email || !genero || !numero_telefono || !contrasena) {
        alert('Por favor, completa todos los campos.');
        return;
    }

    $.ajax({
        url: './script_registrar_usuario.php',
        type: 'POST',
        data: {
            nombre: nombre_usuario,
            email: email,
            genero: genero,
            numero_telefono: numero_telefono,
            contrasena: contrasena
        },
        success: function (response) {
            location.reload();
            
            alert("Usuario creado exitosamente");
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
            alert('Hubo un problema al procesar tu solicitud. Por favor, intenta de nuevo.');
        }
    });
});