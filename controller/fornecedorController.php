<?php
require_once("conecta.php");
require_once("model/Fornecedor.php");

function insereFornecedor($conexao, Fornecedor $fornecedor) {

	$query = "insert into fornecedor (razaosocial_fornecedor, cpnj_fornecedor, email, telefone_contato) 
		values ('{$fornecedor->getRazaoSocial()}', '{$fornecedor->getCnpj()}', '{$fornecedor->getEmail()}', '{$fornecedor->getTelefoneContato()}')";

	return mysqli_query($conexao, $query);
}

?>