<?php
require_once("conecta.php");
require_once("model/Endereco.php");
require_once("controller/logicaUsuario.php");



function buscaCliente($conexao, $usuarioLogado){    
	$query = "select * from cliente where email='{$usuarioLogado}'";
	$resultado = mysqli_query($conexao, $query);
	$cliente = mysqli_fetch_assoc($resultado);
	return $cliente;
}



function insereEndereco($conexao, Endereco $endereco) {

	$query = "insert into endereco (cliente_id, rua, numero, bairro, cep, cidade, uf) 
		values ('{$endereco->getClientId()}', '{$endereco->getRua()}', 
			'{$endereco->getNumero()}', '{$endereco->getBairro()}','{$endereco->getCep()}',
            '{$endereco->getCidade()}', '{$endereco->getUf()}')";
    var_dump($query);
	return mysqli_query($conexao, $query);
}
