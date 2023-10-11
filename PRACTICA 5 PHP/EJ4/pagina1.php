<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 1</title>
    <link rel="stylesheet" type="text/css" href="./estilos.css">
</head>
<body>
    <div class="container">
        <h1>Página 1</h1>
        <p>Esta es la Página 1.</p>
        <p>
            <?php include 'contador_paginas.php'; ?>
        </p>
        <p>
            <a href="index.php">Volver a la Página Principal</a>
            <a href="pagina2.php">Ir a Página 2</a>
        </p>
    </div>
</body>
</html>

