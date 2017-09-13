<?php
require_once("cabecalho.php");
require_once("controller/produtoController.php");
require_once("model/Produto.php");

$id = $_POST['id'];
removeProduto($conexao, $id);
$_SESSION["success"] = "O produto removido.";
header("Location: produto-lista.php");
die();

?>