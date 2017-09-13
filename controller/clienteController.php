<?php
require_once("conecta.php");
require_once("model/Cliente.php");

function insereCliente($conexao, Cliente $cliente) {

	$query = "insert into Cliente (nome_cliente, cpf_cliente, email, telefone_contato) 
		values ('{$cliente->getNome()}', '{$cliente->getCpf()}', '{$cliente->getEmail()}',  '{$cliente->getTelefoneContato()}')";

	return mysqli_query($conexao, $query);
}

?>