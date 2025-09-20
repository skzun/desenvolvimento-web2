<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tarefas de Hoje</title>
</head>
<body>

    <?php include 'menu.php'; ?>
    
    <h1>Tarefas para Hoje</h1>

    <ul>
        <?php
        $data_hoje = date('Y-m-d');
        $tem_tarefa_hoje = false;

        if (isset($_SESSION['tarefas']) && !empty($_SESSION['tarefas'])) {
            foreach ($_SESSION['tarefas'] as $indice => $tarefa) {
                if ($tarefa['data'] == $data_hoje) {
                    $tem_tarefa_hoje = true;
                    echo "<li>";
                    echo htmlspecialchars($tarefa['nome']);
                    echo " <a href='apagar_tarefa.php?id=" . $indice . "'>[Apagar]</a>";
                    echo "</li>";
                }
            }
        }

        if (!$tem_tarefa_hoje) {
            echo "<li>Nenhuma tarefa para hoje.</li>";
        }
        ?>
    </ul>
</body>
</html>