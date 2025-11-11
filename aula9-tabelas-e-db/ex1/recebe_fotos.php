<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Foto</title>
</head>
<body>
    <h2>Selecione uma imagem para enviar</h2>
    <form action="processa_upload.php" method="post" enctype="multipart/form-data">
        <div>
            <label>Escolha a imagem:</label>
            <input type="file" name="figura" accept="image/*">
        </div>
        <br>
        <input type="submit" value="Enviar Imagem">
    </form>
</body>
</html>