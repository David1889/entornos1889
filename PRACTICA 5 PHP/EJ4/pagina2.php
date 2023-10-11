<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 2</title>
    <link rel="stylesheet" type="text/css" href="./estilos.css">
</head>
<body>
    <div class="container">
        <h1>Página 2</h1>
        <p>Esta es la Página 2.</p>
        <p>
            <?php include './contador_paginas.php'; ?>
        </p>
        <p>
            <a href="index.php">Volver a la Página Principal</a>
            <a href="pagina1.php">Ir a Página 1</a>
        </p>
    </div>
</body>
</html>
