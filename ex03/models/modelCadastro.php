<?php

class ProdutoModel {
    public function salvar($codigo, $produto, $validade, $preco) {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=empresa;charset=utf8", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO produtos (codigo, produto, validade, preco) VALUES (:codigo, :produto, :validade, :preco)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':codigo', $codigo);
            $stmt->bindParam(':produto', $produto);
            $stmt->bindParam(':validade', $validade);
            $stmt->bindParam(':preco', $preco);

            return $stmt->execute();

        } catch (PDOException $e) {
            error_log($e->getMessage());
            return false;
        }
    }
}
?>