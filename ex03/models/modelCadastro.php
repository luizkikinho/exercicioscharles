<?php
class ProdutoModel{

    public function salvar($codigo, $produto, $validade, $preco) {
        try {
            // Conexão com o banco
            $conecta = new PDO("mysql:host=localhost;dbname=empresa", "root", "");
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Converte a data de dd/mm/aaaa para Y-m-d
            $dataFormatada = DateTime::createFromFormat('d/m/Y', $validade);
            $validade = $dataFormatada ? $dataFormatada->format('Y-m-d') : null;

            // Monta o SQL
            $sql = "INSERT INTO produtos (codigo, produto, data_validade, preco) 
                    VALUES ('".$codigo."', '".$produto."', '".$validade."', '".$preco."')";

            // Executa
            $conecta->exec($sql);

            echo "<h1>Produto gravado com sucesso!</h1>";
            return true;

        } catch(PDOException $erro) {
            echo "Falha ao gravar: " . $erro->getMessage();
            return false;
        }
    }
}
?>

