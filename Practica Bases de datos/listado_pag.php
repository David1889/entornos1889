<!DOCTYPE html>
<html>
<head>
    <title>Listado de capitales (Con Paginación)</title>
</head>
<body>
    <h2>Listado de capitales (Con Paginación)</h2>
    <?php
    include("conexion.php");
    if (!$conexion) {
        die("Conexión a la base de datos fallida: " . mysqli_connect_error());
    }

    $registros_por_pagina = 10; // Número de registros por página
    $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1; // Página actual

    $inicio = ($pagina_actual - 1) * $registros_por_pagina;

    $sql = "SELECT * FROM capitales LIMIT $inicio, $registros_por_pagina";
    $resultado = mysqli_query($conexion, $sql);

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Ciudad</th><th>País</th><th>Habitantes</th><th>Superficie</th><th>Tiene Metro</th></tr>";

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr><td>{$fila['id']}</td><td>{$fila['ciudad']}</td><td>{$fila['país']}</td><td>{$fila['habitantes']}</td><td>{$fila['superficie']}</td><td>{$fila['tieneMetro']}</td></tr>";
    }

    echo "</table>";

    // Paginación
    $sql_total = "SELECT COUNT(*) as total FROM capitales";
    $result_total = mysqli_query($conexion, $sql_total);
    $row = mysqli_fetch_assoc($result_total);
    $total_registros = $row['total'];
    $total_paginas = ceil($total_registros / $registros_por_pagina);

    echo "<div class='paginacion'>";
    for ($i = 1; $i <= $total_paginas; $i++) {
        echo "<a href='listado_pag.php?pagina=$i'>$i</a> ";
    }
    echo "</div>";

    mysqli_close($conexion);
    ?>
     <a href="menu.php">Volver al Menú Principal</a>
</body>
</html>
