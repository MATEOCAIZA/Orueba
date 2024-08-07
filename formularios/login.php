<?php
include("conexion.php");

if (isset($_POST['login'])) {
    if (strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        // Prevenir inyección SQL usando sentencias preparadas
        $stmt = $connec->prepare("SELECT * FROM datos WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            echo "<h3 class='success'>Inicio de sesión exitoso</h3>";
        } else {
            echo "<h3 class='error'>Correo no registrado o contraseña incorrecta</h3>";
        }

        $stmt->close();
    } else {
        echo "<h3 class='error'>Llena todos los campos</h3>";
    }
}
?>
