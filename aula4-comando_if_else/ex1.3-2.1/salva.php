<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Salva</title>
</head>
<body>

<?php include 'menu.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salva</title>
</head>
<body>
    <?php
        session_start();

        $nome = $_GET['nome'];
        echo "Nome recebido: $nome";

        $_SESSION['nome'] = $nome;

        echo "<br>Nome Salvo!";

    ?>
</body>
</html>

</body>
</html>
