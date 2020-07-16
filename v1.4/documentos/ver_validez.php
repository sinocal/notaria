<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $value = $_POST['casilla_envio'];
    //incluir aqui el codigo que consulta en el blockchain
    require('consultar_en_blockchain.php');
    ?>
    <a href="mis_documentos.php">OK</a>
</body>
</html>