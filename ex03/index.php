<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/controllers/controllerCadastro.php';
$controller = new ProdutoController();

$acao = $_GET['acao'] ?? 'menu';

switch ($acao) {
    case 'menu':
        ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Menu Principal</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body class="bg-light">
            <div class="container mt-5 text-center">
                <div class="card shadow p-5 mx-auto" style="max-width: 400px;">
                    <h1 class="mb-4">Sistema de Produtos</h1>
                    <a href="index.php?acao=index" class="btn btn-primary w-100 mb-3">Cadastro de Produtos</a>
                    <a href="index.php?acao=buscar" class="btn btn-success w-100">Buscar Produtos</a>
                </div>
            </div>
        </body>
        </html>
        <?php
        break;

    case 'index':
        $controller->index();
        break;

    case 'salvar':
        $controller->salvar();
        break;

    default:
        echo "Erro 404: Página não encontrada";
        break;
}
?>

