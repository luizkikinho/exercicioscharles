<?php
class acessarBanco {
  public static function busca($termo) {
    try {
      $conecta = new PDO("mysql:host=localhost;dbname=empresa", "root", "");
      $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "SELECT * FROM produtos WHERE codigo = ? OR produto LIKE ?";
      $stmt = $conecta->prepare($sql);
      $stmt->execute([$termo, "%$termo%"]);

      return $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $erro) {  
      echo "Erro na busca: " . $erro->getMessage();
      return false;
    }
  }
}
?>
