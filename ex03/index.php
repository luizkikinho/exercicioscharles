<?php

// Pega a ação da URL. Se não houver, a ação padrão é 'index'.
$acao = $_GET['acao'] ?? 'index';

// Inclui o controller correto
require_once __DIR__ . '/controllers/controllerCadastro.php';

// Cria uma instância do controller
$controller = new ProdutoController();

// Executa o método correspondente à ação
switch ($acao) {
    case 'index':
        $controller->index();
        break;
    case 'salvar':
        $controller->salvar();
        break;
    case 'buscar':          // se quiser buscar
        $controller->buscar();
        break;
    default:
        echo "Erro 404: Página não encontrada";
        break;
}
