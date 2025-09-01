<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado da Busca</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow p-4 mx-auto" style="max-width: 600px;">
      <h3 class="mb-4 text-center">Resultado da Busca</h3>

      <?php if (isset($resultado) && $resultado): ?>
        <ul class="list-group">
          <li class="list-group-item"><strong>Código:</strong> <?= htmlspecialchars($resultado['codigo']) ?></li>
          <li class="list-group-item"><strong>Produto:</strong> <?= htmlspecialchars($resultado['produto']) ?></li>
          <li class="list-group-item"><strong>Validade:</strong> <?= htmlspecialchars($resultado['validade']) ?></li>
          <li class="list-group-item"><strong>Preço:</strong> R$ <?= htmlspecialchars($resultado['preco']) ?></li>
        </ul>
      <?php else: ?>
        <div class="alert alert-warning text-center">
          Produto não encontrado.
        </div>
      <?php endif; ?>

      <div class="mt-4 text-center">
        <a href="busca.html" class="btn btn-outline-secondary">Nova busca</a>
      </div>
    </div>
  </div>
</body>
</html>
