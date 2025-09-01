<?php
require_once 'model.php';
if ($_SERVER['REQUEST_METHOD']=="POST") {
  $codigo=$_POST['cx_codigo'];
  $produto=$_POST['cx_produto'];
  $validade=$_POST['cx_validade'];
  $preco=$_POST['cx_preco'];

  $res=acessarBanco::grava($codigo,$produto,$validade,$preco);
  return($res);
  include 'view.php';
}
?>
