<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Nombre de Usuario</title>
</head>
<body>
    <h1>Formulario de Nombre de Usuario</h1>

    <form method="post" action="ej3.php">
        <label for="usuario">Nombre de Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <button type="submit" name="submit">Guardar Nombre de Usuario</button>
    </form>

    <p>Último Nombre de Usuario Ingresado: 
    <?php
        if (isset($_COOKIE['ultimoUsuario'])) {
            echo $_COOKIE['ultimoUsuario'];
        } else {
            echo "Ningún nombre de usuario ingresado.";
        }
    ?>
    </p>
</body>
</html>
