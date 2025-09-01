<?php

require_once __DIR__ . '/../models/ProdutoModel.php';

class ProdutoController {
    public function index() {
        require_once __DIR__ . '/../views/formulario.php';
    }
    public function salvar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new ProdutoModel();

            // Pega os dados do formulário
            $codigo   = $_POST['cx_codigo'];
            $produto  = $_POST['cx_produto'];
            $validade = $_POST['cx_validade'];
            $preco    = $_POST['cx_preco'];
            
            // Chama o método salvar do model
            $sucesso = $model->salvar($codigo, $produto, $validade, $preco);

            // Prepara a mensagem para o usuário
            if ($sucesso) {
                $mensagem = ['texto' => 'Produto cadastrado com sucesso!', 'tipo' => 'success'];
            } else {
                $mensagem = ['texto' => 'Ocorreu um erro ao cadastrar.', 'tipo' => 'danger'];
            }

            // Após processar, carrega a view do formulário novamente,
            // passando a mensagem de status para ela.
            require_once __DIR__ . '/../views/formulario.php';
        }
    }
}
?>