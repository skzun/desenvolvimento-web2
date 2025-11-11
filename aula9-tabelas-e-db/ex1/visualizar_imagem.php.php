<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Imagem</title>
</head>
<body>
    <?php
    if (isset($destino)) {
        echo "<img src='$destino' style='width: 100px; height: auto; border-radius: 5px;'>";
    }
    ?>
</body>
</html>