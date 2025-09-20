<?php
session_start();

if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = array();
}

$nome = $_POST['nome_tarefa'];
$data = $_POST['data_tarefa'];

$nova_tarefa = [
    'nome' => $nome,
    'data' => $data
];

$_SESSION['tarefas'][] = $nova_tarefa;

echo "<h1>Tarefa salva com sucesso!</h1>";
echo "<a href='nova_tarefa.php'>Cadastrar uma nova tarefa</a>";
echo "<br>";
echo "<a href='listar_todas.php'>Ver todas as tarefas</a>";

?>