<?php
if (isset($_COOKIE['titular'])) {
    setcookie('titular', '', time() - 3600);

    header('Location: ej4.php');
}
?>
