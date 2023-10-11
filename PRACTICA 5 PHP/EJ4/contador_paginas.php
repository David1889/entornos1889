<?php
// Iniciamos o continuamos la sesión
session_start();

// Verificamos si se ha presionado el botón "Iniciar Sesión"
if (isset($_POST['iniciar_sesion'])) {
    $_SESSION['sesion_iniciada'] = true;
    $_SESSION['visitas_pagina1'] = 0;
    $_SESSION['visitas_pagina2'] = 0;
}

// Verificamos si se ha presionado el botón "Cerrar Sesión"
if (isset($_POST['cerrar_sesion'])) {
    session_unset();
    session_destroy();
}

// Incrementamos el contador de visitas de la página actual
if (isset($_SESSION['sesion_iniciada']) && $_SESSION['sesion_iniciada'] === true) {
    if (basename($_SERVER['PHP_SELF']) === 'pagina1.php') {
        $_SESSION['visitas_pagina1']++;
    } elseif (basename($_SERVER['PHP_SELF']) === 'pagina2.php') {
        $_SESSION['visitas_pagina2']++;
    }
}
?>


<p>
    <?php
    if (isset($_SESSION['sesion_iniciada']) && $_SESSION['sesion_iniciada'] === true) {
        echo "Visitas a Página 1: " . $_SESSION['visitas_pagina1'] . " vez(es).<br>";
        echo "Visitas a Página 2: " . $_SESSION['visitas_pagina2'] . " vez(es).<br>";
        echo "Total de Visitas en esta Sesión: " . ($_SESSION['visitas_pagina1'] + $_SESSION['visitas_pagina2']) . " vez(es).";
    }
    ?>
</p>
