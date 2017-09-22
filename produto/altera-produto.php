<?php
require_once("../cabecalho-adm.php");
require_once("../controller/produtoController.php");
require_once("../model/Produto.php");

$nome = $_POST['nome'];
$preco_custo = $_POST['preco-custo'];
$preco_venda = $_POST['preco-venda'];
$unidade = $_POST['unidade'];
$id = $_POST['id'];

$produto = new Produto($nome, $preco_custo, $preco_venda, $unidade);
$produto->setId($_POST['id']);

alteraProduto($id, $produto);

?>
