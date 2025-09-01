<?php

// Pega a ação da URL. Se não houver, a ação padrão é 'index'.
$acao = $_GET['acao'] ?? 'index';

// Inclui o controller
require_once 'controllers/ProdutoController.php';

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
    default:
        // Se a ação não for reconhecida, pode exibir um erro 404 ou redirecionar
        echo "Erro 404: Página não encontrada";
        break;
}
?>