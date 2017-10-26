<?php

require_once("controller/cooProdutoControler.php");
require_once("controller/produtoController.php");
require_once("config/conexao.php");
require_once("model/Produto.php");
require_once("controle-sessao.php");

$nome_produto = $_POST['pc_nome'];
$demanda = 0;
$unidade = $_POST['pc_unidade'];
$custo = $_POST['pc_valor'];
$venda = 0;
$pc_id = $_POST['pc_id'];

$produto = new Produto($nome_produto, $custo, $venda, $unidade, $demanda, $pc_id);

insereProduto($produto);
header("location:adm-dashboard.php#produtos");



