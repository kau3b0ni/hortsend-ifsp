<?php
require_once("conecta.php");
require_once("class/Produto.php");

function insereProduto($conexao, Produto $produto) {

	$query = "insert into produto (nome_produto, preco_custo, preco_venda, unidade, demanda_geral) 
		values ('{$produto->getNome()}', '{$produto->getPrecoCusto()}', 
			'{$produto->getPrecoVenda()}', '{$produto->getUnidade()}', '100')";

	return mysqli_query($conexao, $query);
}
