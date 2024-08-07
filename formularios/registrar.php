<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $direccion = trim($_POST['direction']);
        $phone = trim($_POST['phone']);
        $password = trim($_POST['password']);
        $fecha = date("Y-m-d");

        $consulta = "INSERT INTO datos (nombre, email, direccion, telefono, password, fecha) 
                     VALUES ('$name', '$email', '$direccion', '$phone', '$password', '$fecha')";

        $resultado = mysqli_query($connec, $consulta);

        if ($resultado) {
            echo "<h3 class='success'>Tu registro se ha completado</h3>";
        } else {
            echo "<h3 class='error'>Ha ocurrido un error</h3>";
        }
    } else {
        echo "<h3 class='error'>Llena todos los campos</h3>";
    }
}
?>
