<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resultados de Búsqueda</title>
</head>
<body>
<?php
include("Conexion.php");
$pal = $_POST['Palabra'];

if ($pal) {
    $conn = new mysqli("localhost","root","","prueba");

    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    $pal = $conn->real_escape_string($pal);
    $sql = "SELECT * FROM buscador WHERE canciones LIKE '%" . $pal . "%'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        echo "No hay resultados respecto a la palabra que busca.";
    } else {
        echo "<center><strong>RESULTADOS DE BÚSQUEDA</strong></center><br>";

        while ($row = $result->fetch_assoc()) {
            echo "<p>" . $row['canciones'] . "</p>";
        }
    }

    $conn->close();

    echo "<a href='FormBuscador.html'>Volver al buscador</a>";
} else {
    echo "<form name='FormBuscador' method='post' action=''><input name='Palabra' type='text' id='Palabra'><input type='submit' name='Submit' value='Buscar!'></form>";
}
?>
</body>
</html>
