<?php
require_once("conecta.php");
require_once("model/Produto.php");

function insereProduto($conexao, Produto $produto) {

	$query = "insert into produto (nome_produto, preco_custo, preco_venda, unidade, demanda_geral) 
		values ('{$produto->getNome()}', '{$produto->getPrecoCusto()}', 
			'{$produto->getPrecoVenda()}', '{$produto->getUnidade()}', '100')";

	return mysqli_query($conexao, $query);
}




function listaProdutos($conexao) {

	$produtos = array();
	$resultado = mysqli_query($conexao, "select * from produto");

	while($produto_array = mysqli_fetch_assoc($resultado)) {

		
		$nome = $produto_array['nome_produto'];
		$preco_custo = $produto_array['preco_custo'];
		$preco_venda = $produto_array['preco_venda'];
		$unidade = $produto_array['unidade'];

		$produto = new Produto($nome, $preco_custo, $preco_venda, $unidade);
		$produto->setId($produto_array['id_produto']);

		array_push($produtos, $produto);
	}

	return $produtos;
}

function alteraProduto($conexao, Produto $produto) {

	$query = "update produto set nome_produto = '{$produto->getNome()}', 
		preco_venda = '{$produto->getPrecoVenda()}', preco_custo = '{$produto->getPrecoCusto()}', 
			unidade = '{$produto->getUnidade()}' where id_produto = '{$produto->getId()}'";

	return mysqli_query($conexao, $query);
}


function buscaProduto($conexao, $id) {

	$query = "select * from produto where id_produto = {$id}";
	
	$resultado = mysqli_query($conexao, $query);
	
	$produto_buscado = mysqli_fetch_assoc($resultado);	

	$nome = $produto_buscado['nome_produto'];
	$preco_custo = $produto_buscado['preco_custo'];
	$preco_venda = $produto_buscado['preco_venda'];
	$unidade = $produto_buscado['unidade'];

	$produto = new Produto($nome, $preco_custo, $preco_venda, $unidade);
	$produto->setId($produto_buscado['id_produto']);

	return $produto;
}


function removeProduto($conexao, $id) {

	$query = "delete from produto where id_produto = {$id}";

	return mysqli_query($conexao, $query);
}