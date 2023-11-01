<!DOCTYPE html>
<html>
<head>
    <title>Periódico Virtual</title>
</head>
<body>
    <h1>Periódico Virtual</h1>

    <form method="post" action="configurar_titular.php">
        <p>Seleccione el tipo de titular que desea ver:</p>
        <input type="radio" name="titular" value="politica" id="politica" required>
        <label for="politica">Noticia Política</label><br>

        <input type="radio" name="titular" value="economica" id="economica">
        <label for="economica">Noticia Económica</label><br>

        <input type="radio" name="titular" value="deportiva" id="deportiva">
        <label for="deportiva">Noticia Deportiva</label><br>

        <button type="submit" name="sub">Configurar Titular</button>
    </form>

    <p>
    <?php
    if (isset($_COOKIE['titular'])) {
        echo "Titular seleccionado: " . $_COOKIE['titular'];
    }
    ?>
    </p>

    <p><a href="borrar_cookie.php">Borrar Cookie</a></p>
</body>
</html>
