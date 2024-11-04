<?php
session_start();

// Datos de ejemplo para el inicio de sesión (esto debería venir de una base de datos)
$usuarios_validos = array(
    "usuario1" => "contrasena1",
    "usuario2" => "contrasena2"
);

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar si las credenciales son correctas
    if (isset($usuarios_validos[$username]) && $usuarios_validos[$username] == $password) {
        // Iniciar sesión y guardar los datos en la sesión
        $_SESSION['username'] = $username;

        // Redirigir a la página deseada
        header("Location: http://localhost/matematicas/day/");
        exit(); // Asegúrate de detener la ejecución del script después de la redirección
    } else {
        // Si las credenciales son incorrectas, redirigir al formulario de inicio de sesión con un mensaje de error
        header("Location: login.html?error=1");
        exit();
    }
}
?>
