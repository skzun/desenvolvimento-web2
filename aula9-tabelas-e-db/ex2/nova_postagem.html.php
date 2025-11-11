<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Publicação</title>
</head>
<body>
    <h2>Criar nova publicação</h2>
    <form action="gravar_postagem.php" method="post" enctype="multipart/form-data">
        <div>
            <label>Selecione a imagem:</label>
            <input type="file" name="figura" required>
        </div>
        <br>
        <input type="submit" value="Publicar">
    </form>
</body>
</html>