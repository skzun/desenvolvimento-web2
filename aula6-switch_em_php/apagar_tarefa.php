<?php
session_start();

if (isset($_GET['id'])) {
    $id_para_apagar = $_GET['id'];

    if (isset($_SESSION['tarefas'][$id_para_apagar])) {
        unset($_SESSION['tarefas'][$id_para_apagar]);
        echo "<h1>Tarefa apagada!</h1>";
    } else {
        echo "<h1>Erro: Tarefa não encontrada.</h1>";
    }
} else {
    echo "<h1>Erro: Nenhum ID de tarefa foi fornecido.</h1>";
}

echo "<a href='listar_todas.php'>Voltar para a lista de tarefas</a>";
?>