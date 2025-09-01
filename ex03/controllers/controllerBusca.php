<?php
require_once 'model.php';

if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['tipo']) && $_GET['tipo'] == "busca") {
  $busca = $_GET['cx_busca'];
  $resultado = acessarBanco::busca($busca);
  include 'resultado.php';
}
?>
