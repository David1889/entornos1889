<?php
if (isset($_POST['sub'])) {
    session_start(); 

    
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    
    $_SESSION['usuario'] = $usuario;
    $_SESSION['contrasena'] = $contrasena;

    
    header('Location: visualizar.php');
}
?>
