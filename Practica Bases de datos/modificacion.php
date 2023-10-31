<!DOCTYPE html>
<html>
<head>
    <title>Modificación de Ciudad</title>
</head>
<body>
    <h2>Modificación de Ciudad</h2>
    <form method="post" action="modificacion.php">
        ID de la Ciudad a Modificar: <input type="number" name="id"><br>
        Nuevos Datos:<br>
        Ciudad: <input type="text" name="ciudad"><br>
        País: <input type="text" name="pais"><br>
        Habitantes: <input type="number" name="habitantes"><br>
        Superficie: <input type="number" name="superficie"><br>
        Tiene Metro: <input type="radio" name="tieneMetro" value="1"> Sí
                     <input type="radio" name="tieneMetro" value="0"> No<br>
        <input type="submit" value="Modificar Ciudad">
        <a href="menu.php">Volver al Menú Principal</a>
    </form>

    <?php
    include("conexion.php");

    if (!$conexion) {
        die("Conexión a la base de datos fallida: " . mysqli_connect_error());
    }

    if (isset($_POST["id"]) && isset($_POST["ciudad"]) && isset($_POST["pais"]) && isset($_POST["habitantes"]) && isset($_POST["superficie"]) && isset($_POST["tieneMetro"])) {
        $id = $_POST["id"];
        $ciudad = $_POST["ciudad"];
        $pais = $_POST["pais"];
        $habitantes = $_POST["habitantes"];
        $superficie = $_POST["superficie"];
        $tieneMetro = $_POST["tieneMetro"];

        $sql = "UPDATE capitales SET ciudad='$ciudad', país='$pais', habitantes=$habitantes, superficie=$superficie, tieneMetro=$tieneMetro WHERE id=$id";
        if (mysqli_query($conexion, $sql)) {
            echo "Capital modificada correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
    } else {
        echo "Por favor, complete todos los campos del formulario, incluido el ID.";
    }

    mysqli_close($conexion);
    ?>
</body>
</html>

