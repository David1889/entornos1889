<?php
session_start(); 

if (isset($_SESSION['usuario']) && isset($_SESSION['contrasena'])) {
    $usuario = $_SESSION['usuario'];
    $contrasena = $_SESSION['contrasena'];

    echo "<h1>Valores almacenados en las variables de sesion</h1>";
    echo "Nombre de Usuario: " . $usuario . "<br>";
    echo "Clave: " . $contrasena;
} else {
    echo "No se encontraron valores en las variables de sesion.";
}
?>
