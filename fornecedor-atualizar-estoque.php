<?php
require 'vendor/autoload.php';
require_once("controller/cooProdutoControler.php");
require_once("controller/produtoController.php");
require_once("controller/produtoFornController.php");
require_once("config/conexao.php");
require_once("model/ProdutoFornecedor.php");
require_once("model/Imagem.php");
require_once("controle-sessao.php");


$estoque = $_POST['quantidade_estoque'];
$id = $_POST['id_produto_fornecedor'];
atualizaEstoque($estoque,$id);
header("location: fornecedor-painel.php");