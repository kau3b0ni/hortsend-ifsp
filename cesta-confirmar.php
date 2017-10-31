<?php
require 'vendor/autoload.php';
require_once("controller/cooProdutoControler.php");
require_once("controller/produtoController.php");
require_once("controller/imagemController.php");
require_once "controller/cestaController.php";
require_once "controller/itemCestaController.php";
require_once("config/conexao.php");
require_once("model/Produto.php");
require_once "model/ItemCesta.php";

require_once "model/Cesta.php";

require_once("model/Imagem.php");
require_once("controle-sessao.php");
require_once("imagem-upload.php");

$cestasessao = $_SESSION['cesta'];
$cliente_id = $_SESSION['usuario_logado']['cliente_id'];

$cesta = new Cesta( $cliente_id,
                    $cestasessao['data_inicial'],
                    $cestasessao['periodo'],
                    $cestasessao['endereco_id'],
                    $cestasessao['valor_produtos'],
                    $cestasessao['valor_entrega'],
                    $cestasessao['valor_total']);

$cesta_id = insereCesta($cesta);
$_SESSION['cesta']['id_cesta'] = $cesta_id;
$itens = $_SESSION['itens'];

foreach ($itens as $item) :

    $produto = buscaProduto($item['id_produto']);
    $id_cesta = $cesta_id;
    $id_produto = $item['id_produto'];
    $quantidade = $item['quantidade'];
    $valor = $produto->preco_custo * $quantidade;
    $nome = $produto->nome_produto;

    $item_cesta = new ItemCesta($id_cesta, $id_produto, $valor, $quantidade, $nome);
    insereItemCesta($item_cesta);

endforeach;
header("location: cesta-pagamento.php");

















