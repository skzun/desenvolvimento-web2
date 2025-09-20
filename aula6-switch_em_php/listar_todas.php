<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Todas as Tarefas</title>
</head>
<body>
    
    <?php include 'menu.php'; ?>

    <h1>Todas as Tarefas</h1>

    <ul>
        <?php
        if (isset($_SESSION['tarefas']) && !empty($_SESSION['tarefas'])) {
            foreach ($_SESSION['tarefas'] as $indice => $tarefa) {
                echo "<li>";
                echo htmlspecialchars($tarefa['nome']) . " - Data: " . htmlspecialchars($tarefa['data']);
                echo " <a href='apagar_tarefa.php?id=" . $indice . "'>[Apagar]</a>";
                echo "</li>";
            }
        } else {
            echo "<li>Nenhuma tarefa cadastrada.</li>";
        }
        ?>
    </ul>

</body>
</html>