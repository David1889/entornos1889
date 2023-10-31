<!DOCTYPE html>
<html>
<head>
    <title>Listado de capitales (Sin Paginación)</title>
</head>
<body>
    <h2>Listado de capitales (Sin Paginación)</h2>
    <?php
    include("conexion.php");

    if (!$conexion) {
        die("Conexión a la base de datos fallida: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM capitales";
    $resultado = mysqli_query($conexion, $sql);

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Ciudad</th><th>País</th><th>Habitantes</th><th>Superficie</th><th>Tiene Metro</th></tr>";

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr><td>{$fila['id']}</td><td>{$fila['ciudad']}</td><td>{$fila['país']}</td><td>{$fila['habitantes']}</td><td>{$fila['superficie']}</td><td>{$fila['tieneMetro']}</td></tr>";
    }

    echo "</table>";

    mysqli_close($conexion);
    ?>
    <a href="menu.php">Volver al Menú Principal</a>
</body>
</html>
