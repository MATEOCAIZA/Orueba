<?php
include("conexion.php");

if (isset($_POST['delete'])) {
    if (strlen($_POST['name']) >= 1) {
        $name = trim($_POST['name']);
        
        $consulta = "DELETE FROM datos WHERE nombre='$name'";
        
        $resultado = mysqli_query($connec, $consulta);
        
        if ($resultado) {
            echo "<h3 class='success'>El registro se ha eliminado correctamente</h3>";
        } else {
            echo "<h3 class='error'>Ha ocurrido un error</h3>";
        }
    } else {
        echo "<h3 class='error'>Llena todos los campos</h3>";
    }
}
?>
