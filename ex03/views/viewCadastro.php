<?php
$mensagem = $_GET['mensagem'] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Produtos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow p-4 mx-auto" style="max-width: 500px;">
    <h1 class="mb-4 text-center">Cadastro de Produtos</h1>

    <!-- Mensagem dinâmica -->
    <?php if ($mensagem === 'sucesso'): ?>
        <div class="alert alert-success text-center">Produto cadastrado com sucesso!</div>
    <?php elseif ($mensagem === 'erro'): ?>
        <div class="alert alert-danger text-center">Erro ao cadastrar o produto.</div>
    <?php endif; ?>

    <form method="POST" action="index.php?acao=salvar">
      <div class="mb-3">
        <label for="codigo" class="form-label">Código</label>
        <input type="text" class="form-control" id="codigo" name="cx_codigo" required>
      </div>

      <div class="mb-3">
        <label for="produto" class="form-label">Produto</label>
        <input type="text" class="form-control" id="produto" name="cx_produto" required>
      </div>

      <div class="mb-3">
        <label for="validade" class="form-label">Data de Validade</label>
        <input type="text" class="form-control" id="validade" name="cx_validade" placeholder="dd/mm/aaaa" required>
      </div>

      <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" class="form-control" id="preco" name="cx_preco" step="0.01" required>
      </div>

      <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

