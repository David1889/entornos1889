<?php
if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'];
    $contador++;
} else {
    $contador = 1;
}

setcookie('contador', $contador, time() + 3600 * 24); // La cookie expirará en 24 horas

if ($contador == 1) {
    echo "¡Bienvenido a la página contador.php! Esta es la primera vez que accedes.";
} else {
    echo "Has visitado esta página " . $contador . " veces.";
}
?>
