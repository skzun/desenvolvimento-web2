<?php
$paginaAtual = basename($_SERVER['PHP_SELF']);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="primeira.php">Meu Site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
      aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= ($paginaAtual == 'primeira.php') ? 'active' : '' ?>" href="primeira.php">Primeira</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($paginaAtual == 'salva.php') ? 'active' : '' ?>" href="salva.php">Salvar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($paginaAtual == 'mostra.php') ? 'active' : '' ?>" href="mostra.php">Mostrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($paginaAtual == 'apaga.php') ? 'active' : '' ?>" href="apaga.php">Apagar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
