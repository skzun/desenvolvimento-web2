<?php
session_start();

$total_tarefas = 0;
if (isset($_SESSION['tarefas'])) {
    $total_tarefas = count($_SESSION['tarefas']);
}
?>

<a href="listar_hoje.php">Hoje</a> |
<a href="nova_tarefa.php">Nova</a> |
<a href="listar_todas.php">Todas</a> |
<strong>Total: <?php echo $total_tarefas; ?></strong>
<hr>