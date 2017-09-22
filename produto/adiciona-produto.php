<?php 
//require_once("cabecalhoAdministrador.php");
require_once("../controller/produtoController.php");
require_once("../model/Produto.php");

$nome =        $_POST['nome'];
$preco_custo = $_POST['preco-custo'];
$preco_venda = $_POST['preco-venda'];
$unidade =     $_POST['unidade'];

$produto = new Produto($nome, $preco_custo, $preco_venda, $unidade);

insereProduto($produto);

?>

