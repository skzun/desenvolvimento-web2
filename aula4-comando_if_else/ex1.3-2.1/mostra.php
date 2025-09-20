<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mostra</title>
</head>
<body>

<?php include 'menu.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostra</title>
</head>
<body>
    <?php

    session_start();

    if(isset($_SESSION['nome'])){
        $nome = $_SESSION['nome'];
        echo "Olá $nome!";
    } else {

        echo "SESSÃO NÃO EXISTE";

    }
 
    ?>
</body>
</html>

</body>
</html>
