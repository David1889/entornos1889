<?php
session_start(); // Iniciar sesión

if (isset($_SESSION['nombre'])) {
    $nombre = $_SESSION['nombre'];
    echo "<h1>Bienvenido, $nombre</h1>";
} else {
    echo "No puedes visitar esta página.";
}
?>
