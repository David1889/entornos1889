<?php
if (isset($_POST['sub'])) {
    $titular = $_POST['titular'];

    setcookie('titular', $titular, time() + 3600 * 24 * 7); 

    header('Location: ej4.php');
}
?>
