<?php
ini_set('display_erros', 1);
error_reporting(E_ALL);

require_once 'model.php';

if (isset($_POST['Gravar'])) {
  $codigo=$_POST['cx_codigo'];
  $produto=$_POST['cx_produto'];
  $validade=$_POST['cx_validade'];
  $preco=$_POST['cx_preco'];

  if (acessarBanco::grava($codigo,$produto,$validade,$preco)) {
    $mensagem="Sucesso!";
  } else {
    $mensagem="Falha!";
  }
  include 'view.php';
}
?>
