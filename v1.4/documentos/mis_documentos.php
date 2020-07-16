<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis documentos</title>
    <script src="funciones.js"></script>
</head>
<body>
    <h1>Documentos del usuario</h1>
    <form action="ver_validez.php" method="post">
    <?php
    session_start();
    //echo "Nombre de usuario: ".$_SESSION['usuario'];
    $usuario = $_SESSION['usuario'];
    require('consulta_documentos.php');

    ?>
    </form>
</body>
</html>