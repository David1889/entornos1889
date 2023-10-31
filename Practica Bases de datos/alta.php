<!DOCTYPE html>
<html>
<head>
    <title>Alta de Capital</title>
</head>
<body>
    <h2>Alta de Capital</h2>
    <form method="post" action="alta.php">
        Ciudad: <input type="text" name="ciudad"><br>
        País: <input type="text" name="pais"><br>
        Habitantes: <input type="number" name="habitantes"><br>
        Superficie: <input type="number" name="superficie"><br>
        Tiene Metro: <input type="radio" name="tieneMetro" value="1"> Sí
                     <input type="radio" name="tieneMetro" value="0"> No<br>
        <input type="submit" value="Agregar Ciudad">
        <a href="menu.php">Volver al Menú Principal</a>
    </form>

    <?php
    include("conexion.php");

    if (!$conexion) {
        die("Conexión a la base de datos fallida: " . mysqli_connect_error());
    }

    if (isset($_POST["ciudad"]) && isset($_POST["pais"]) && isset($_POST["habitantes"]) && isset($_POST["superficie"]) && isset($_POST["tieneMetro"])) {
        $ciudad = $_POST["ciudad"];
        $pais = $_POST["pais"];
        $habitantes = $_POST["habitantes"];
        $superficie = $_POST["superficie"];
        $tieneMetro = $_POST["tieneMetro"];

        $sql = "INSERT INTO capitales (ciudad, país, habitantes, superficie, tieneMetro) VALUES ('$ciudad', '$pais', $habitantes, $superficie, $tieneMetro)";
        if (mysqli_query($conexion, $sql)) {
            echo "Capital agregada correctamente.";
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
