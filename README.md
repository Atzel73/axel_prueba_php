
# Prueba Gestion de usuarios

Este repositorio contiene una web básica desarrollada en PHP y JavaScript para gestionar usuarios mediante operaciones CRUD. La aplicación utiliza AJAX para mejorar la experiencia dinámica del usuario y reflejar cambios sin recargar la página.

# Stack tecnico 
```
   - PHP

   - AJAX 

   - HTML

   - CSS
   ```
# Estructura del proyecto
 ```
   - js/: Contiene los scripts JavaScript para gestionar las interacciones del usuario utilizando AJAX.
  
   - config.php. Contiene la conexion a la base de datos.

   - index.php. Pagina pricipal, aqui se ven los usuarios registrados. 

   - form_agregar_usuario.php: Formulario para agregar nuevos usuarios.

   - form_login.php: Formulario para iniciar sesión en el sistema.

   - form_editar_usuario.php. Formulario que edita los datos del usuario.

   - script_cerrar_sesion.php: Script PHP para cerrar sesión del usuario activo.

   - script_eliminar_usuario.php: Script PHP para eliminar usuarios de la base de datos.

   - script_inicio_sesion.php: Script PHP para autenticar usuarios al iniciar sesión.

   - script_obtener_usuarios.php: Script PHP que devuelve la lista de usuarios en formato JSON.

   - script_registrar_usuarios.php: Script PHP para registrar nuevos usuarios en la base de datos.
 ```


## Funcionalidades Implementadas
 ```
- Registro de usuarios
- Inicio de sesion de usuarios
- Cierre de sesion
- Visualizacion de usuarios

 ```
## Instrucciones de uso

Clona el repositorio. 

```bash
  git clone https://github.com/Atzel73/axel_prueba_php.git
```

Ejecuta el siguiente query para crear la base de datos y la tabla de usuarios.

```
CREATE DATABASE gestion_usuarios;
USE gestion_usuarios;
CREATE TABLE usuarios (
id INT AUTO_INCREMENT PRIMARY KEY,
nombre_usuario VARCHAR(50) NOT NULL UNIQUE,
contrasena VARCHAR(255) NOT NULL,
genero VARCHAR(255) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

 Configura tu nombre de usuario y contraseña de PHPMyAdmin en config.php


# Requisitios del sistema

```
- PHP >= 7.0
- MySQL o cualquier otro sistema de gestión de bases de datos compatible.
- Navegador web moderno compatible con JavaScript habilitado.
```
