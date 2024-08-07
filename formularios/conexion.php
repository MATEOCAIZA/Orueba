<?php
// Configuración de conexión
$host = 'localhost'; // O la dirección de tu servidor MySQL
$usuario = 'root';    // O el nombre de usuario de tu base de datos
$clave = '';          // La contraseña de tu base de datos
$base_datos = 'mi_database'; // El nombre de la base de datos

// Crear conexión
$connec = mysqli_connect($host, $usuario, $clave, $base_datos);

// Verificar la conexión
if (!$connec) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
