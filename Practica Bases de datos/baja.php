<!DOCTYPE html>
<html>
<head>
    <title>Eliminación de Capital</title>
</head>
<body>
    <h2>Eliminación de Capital</h2>
    <form method="post" action="baja.php">
        ID de la Capital a Eliminar: <input type="number" name="id"><br>
        <input type="submit" value="Eliminar Ciudad">
        <a href="menu.php">Volver al Menú Principal</a>
    </form>

    <?php
    include("conexion.php");

    if (!$conexion) {
        die("Conexión a la base de datos fallida: " . mysqli_connect_error());
    }

    if (isset($_POST["id"])) { // Verifica si 'id' está definido en $_POST
        $id = $_POST["id"];

        $sql = "DELETE FROM capitales WHERE id=$id";
        if (mysqli_query($conexion, $sql)) {
            echo "Capital eliminada correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }

    mysqli_close($conexion);
    ?>
</body>
</html>
