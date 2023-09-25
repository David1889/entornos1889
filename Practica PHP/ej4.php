<?php
// Definición de la función
function comprobar_nombre_usuario($nombre_usuario)
{
    // Comprobar longitud
    if (strlen($nombre_usuario) < 3 || strlen($nombre_usuario) > 20) {
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }

    // Caracteres permitidos
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-";
    for ($i = 0; $i < strlen($nombre_usuario); $i++) {
        if (strpos($permitidos, substr($nombre_usuario, $i, 1)) === false) {
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }
    }

    echo $nombre_usuario . " es válido<br>";
    return true;
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre_usuario = $_POST["nombre_usuario"];
    comprobar_nombre_usuario($nombre_usuario);
}
?>

<!-- Formulario para ingresar el nombre de usuario -->
<form method="POST">
    <label for="nombre_usuario">Nombre de usuario:</label>
    <input type="text" id="nombre_usuario" name="nombre_usuario" required>
    <button type="submit">Comprobar</button>
</form>