<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Tarefa</title>
</head>
<body>

    <?php include 'menu.php'; ?>

    <h1>Cadastrar Nova Tarefa</h1>

    <form action="salvar_tarefa.php" method="post">
        <label for="nome">Nome da Tarefa:</label><br>
        <input type="text" id="nome" name="nome_tarefa" required>
        <br><br>

        <label for="data">Data:</label><br>
        <input type="date" id="data" name="data_tarefa" required>
        <br><br>

        <button type="submit">Salvar Tarefa</button>
    </form>

</body>
</html>