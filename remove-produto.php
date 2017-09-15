<?php
require_once("cabecalho-adm.php");
require_once("controller/produtoController.php");
require_once("model/Produto.php");

$id = $_POST['id'];
removeProduto($id);
//$_SESSION["success"] = "O produto removido.";
//header("Location: produto-lista.php?id=3");
die();

?>