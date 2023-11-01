<?php
// Iniciar o reanudar la sesión
session_start();

if (isset($_POST['estilo'])) {
    $estilo = $_POST['estilo'];

    // Guardar el estilo en la sesión
    $_SESSION['estilo'] = $estilo;

    // Redirigir de nuevo a la página de configuración de estilo
    header('Location: configurar_estilo.php');
    exit();
}
?>
