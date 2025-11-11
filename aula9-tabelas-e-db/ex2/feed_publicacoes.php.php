<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed de Publicações</title>
</head>
<body>
    <h1>Publicações Recentes</h1>
    
    <?php
    $servidor = 'localhost';
    $nome_banco = 'rede-social';
    $usuario = 'root';
    $senha = '';

    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$nome_banco", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($_POST && isset($_POST['id_curtir'])) {
            $id_post = (int)$_POST['id_curtir'];
            $sql = $conn->prepare("UPDATE postagem SET curtidas = curtidas + 1 WHERE id = :id_post");
            $sql->bindValue(':id_post', $id_post, PDO::PARAM_INT);
            $sql->execute();
        }

        $consulta = $conn->prepare("SELECT * FROM postagem ORDER BY curtidas DESC");
        $consulta->execute();

        while ($dados = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo "<div style='padding: 15px; margin: 10px 0; border: 1px solid #eee;'>";
            echo "<img src='fotos/" . htmlspecialchars($dados['caminho']) . "' alt='Publicação' style='width: 250px;'><br>";
            echo "<p><strong>Curtidas: " . htmlspecialchars($dados['curtidas']) . "</strong></p>";
            echo "<form method='post'>";
            echo "<input type='hidden' name='id_curtir' value='" . $dados['id'] . "'>";
            echo "<button type='submit' style='padding: 5px 10px;'>Curtir 👍</button>";
            echo "</form>";
            echo "</div>";
        }

    } catch(PDOException $e) {
        echo "Erro de conexão: " . $e->getMessage();
    }
    ?>

    <br>
    <a href="upload_imagem.html">↩ Voltar para upload</a>
</body>
</html>