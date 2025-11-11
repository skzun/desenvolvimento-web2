<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Upload</title>
</head>
<body>
    <?php
    $nome_original = $_FILES['figura']['name'];
    $local_temporario = $_FILES['figura']['tmp_name'];
    $pasta_destino = 'fotos/' . $nome_original;

    if (move_uploaded_file($local_temporario, $pasta_destino)) {
        echo "<p>✅ Imagem enviada com sucesso!</p>";
    } else {
        echo "<p>❌ Falha no envio da imagem.</p>";
    }

    echo "<h3>Prévia da imagem:</h3>";
    echo "<img src='$pasta_destino' style='max-width: 400px; border: 2px solid #ccc;'>";
    ?>
    
    <br><br>
    <a href="upload_imagem.html">← Enviar outra imagem</a>
</body>
</html>