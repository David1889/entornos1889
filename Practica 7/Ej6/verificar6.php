<?php
session_start(); 

if (isset($_POST['sub'])) {
    $email = $_POST['email'];

    
    include("conexion.php");

    if (!$conexion) {
        die("Conexión a la base de datos fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT nombre FROM alumnos WHERE mail = '$email'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $_SESSION['nombre'] = $fila['nombre'];
        header('Location: bienvenida.php');
    } else {
        header('Location: no_autorizado.php');
    }

    $conexion->close();
}
?>
