<?php
require_once("conecta.php");
require_once("model/Login.php");

function insereLogin($conexao, Login $login) {

	$query = "insert into login (email, senha, nivel_acesso) 
		values ('{$login->getEmail()}', '{$login->getSenha()}', '{$login->getNivelAcesso()}')";

	return mysqli_query($conexao, $query);
}

		
function buscaUsuario($conexao, $email, $senha) {
	
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "select * from login where email='{$email}' and senha='{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}

function Usuario($conexao, $email, $senha){
	
	$query = "select * from login where email = '$email' and senha = '$senha'";
 	
	$resultado = mysqli_query($conexao, $query);
	$linhas = mysqli_num_rows($resultado); 
	if($linhas<=0){
		return 0;
		//header('location:login.php?id=2');
	} else {

		//cliente
		$query = "select * from cliente where email = '$email'";
		$resultado = mysqli_query($conexao,$query);
		$linhas = mysqli_num_rows($resultado); 
		if(!$linhas<=0){
			return 1;
		}

		//fornecedor
		$query = "select * from fornecedor where email = '$email'";
		$resultado = mysqli_query($conexao, $query);
		$linhas = mysqli_num_rows($resultado); 
		if(!$linhas<=0){
			return 2;
		}


		//administrador
		$query = "select * from administrador where email = '$email'";
		$resultado = mysqli_query($conexao, $query);
		$linhas = mysqli_num_rows($resultado); 
		if(!$linhas<=0){
			
			return 3;
			//header('location:paginaAdministrador.php?');
		}
	}


}

?>