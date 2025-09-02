<?php
require_once __DIR__ . '/../models/modelCadastro.php';

class ProdutoController {

    public function index() {
        // Exibe o formulário
        require __DIR__ . '/../views/viewCadastro.php';
    }

    public function salvar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new ProdutoModel();

            $codigo   = $_POST['cx_codigo'];
            $produto  = $_POST['cx_produto'];

            // Converte a data de dd/mm/aaaa para Y-m-d
            $validade = DateTime::createFromFormat('d/m/Y', $_POST['cx_validade']);
            $validade = $validade ? $validade->format('Y-m-d') : null;

            $preco    = $_POST['cx_preco'];

            // Tenta salvar
            $res = $model->salvar($codigo, $produto, $validade, $preco);

            // Redireciona para o formulário com mensagem via GET
            if ($res) {
                header("Location: index.php?acao=index&mensagem=sucesso");
            } else {
                header("Location: index.php?acao=index&mensagem=erro");
            }
            exit;
        }
    }
}
?>

