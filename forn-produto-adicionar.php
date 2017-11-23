<?php
require 'vendor/autoload.php';
require_once("controller/cooProdutoControler.php");
require_once("controller/produtoController.php");
require_once("controller/produtoFornController.php");
require_once("config/conexao.php");
require_once("model/ProdutoFornecedor.php");
require_once("model/Imagem.php");
require_once("controle-sessao.php");


print_r($_POST);
$demanda = 0;
$estoque = $_POST['quantidade_estoque'];
$pc_id = $_POST['pc_id'];

$produto = new ProdutoFornecedor($pc_id, $_SESSION['usuario_logado']['id_fornecedor'], $demanda, $estoque);
insereProdutoForn($produto);
header("location:fornecedor-painel.php");




