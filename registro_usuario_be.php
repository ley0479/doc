<?php


include 'conexion_be.php';
// Obtener los datos del formulario
$nombre = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña']; // Encriptar la contraseña


// Insertar los datos en la base de datos
$query = "INSERT INTO usuarios (nombre_completo, corro,usuario, contraseña) 
        VALUES ('$nombre_completo', '$correo', '$usuario','$contraseña')";

        
        $ejecuar = mysqli_query($conexión,$query);

