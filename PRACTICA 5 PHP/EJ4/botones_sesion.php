<?php
// Esta la sesion activa?
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// apreta el boton inciar sesion
if (isset($_POST['iniciar_sesion'])) {
    $_SESSION['sesion_iniciada'] = true;
}

// apreta el boton cerrar sesion
if (isset($_POST['cerrar_sesion'])) {
    session_unset();
    session_destroy();
}

// incrementa el contador de visitas de la pagina actual
if (isset($_SESSION['sesion_iniciada']) && $_SESSION['sesion_iniciada'] === true) {
    echo "Sesión Iniciada. ";
} else {
    echo "Sesión No Iniciada. ";
}
?>

<form method="post">
    <input type="submit" name="iniciar_sesion" value="Iniciar Sesión">
    <input type="submit" name="cerrar_sesion" value="Cerrar Sesión">
</form>

