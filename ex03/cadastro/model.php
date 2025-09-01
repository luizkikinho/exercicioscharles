<?php
  class acessarBanco{
  public static function grava($codigo,$produto,$validade,$preco){
    try {
      $conecta=new PDO("mysql:host=localhost;dbname=empresa","root","");
      $conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $texto="INSERT INTO produtos VALUES ('".$codigo."','".$produto."','"$validade"','"$preco"')";

      $conecta->exec($texto);
      return true;
    } catch (PDOException $erro) {
      echo "Falha na conexão";
      return false;
    }
  }
}
?>
