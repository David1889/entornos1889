<?php
if (isset($_POST['submit'])) {
    $usuario = $_POST['usuario'];

    setcookie('ultimoUsuario', $usuario, time() + 3600 * 24 * 30);

    header('Location: nom_usu.php');
}
?>
