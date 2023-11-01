<?php
// Iniciar o reanudar la sesión
session_start();

// Verificar si hay una cookie de estilo
if (isset($_COOKIE['estilo'])) {
    $estilo = $_COOKIE['estilo'];
} elseif (isset($_SESSION['estilo'])) {
    $estilo = $_SESSION['estilo'];
} else {
    $estilo = 'estilo-claro'; // Estilo predeterminado si no hay elección previa
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manejo de Sesiones y Cookies con PHP</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $estilo; ?>.css">
</head>
<body>
    <h1>Manejo de Sesiones y Cookies con PHP</h1>
    <p>Esta es la página con el estilo seleccionado.</p>
    <p><a href="configurar_estilo.php">Configurar Estilo</a></p>
</body>
</html>
