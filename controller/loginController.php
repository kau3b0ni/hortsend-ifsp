<?php
require_once("conecta.php");
require_once("model/Login.php");

function insereLogin($conexao, Login $login) {

	$query = "insert into login (email, senha, nivel_acesso) 
		values ('{$login->getEmail()}', '{$login->getSenha()}', '{$login->getNivelAcesso()}')";

	return mysqli_query($conexao, $query);
}

function loginSistema($conexao, $email, $senha){
	
	$query = "select * from login where email = '$email' and senha = '$senha'";
 	
	$resultado = mysqli_query($conexao, $query);
	$linhas = mysqli_num_rows($resultado); 
	if($linhas<=0){
		
		header('location:login.php?id=2');
	} else {
		
		$query = "select * from cliente where email = '$email'";
		
		$resultado = mysqli_query($conexao,$query);
		$linhas = mysqli_num_rows($resultado); 
		if(!$linhas<=0){
			$id = 2;
			header('location:paginaCliente.php?');
		}
		$query = "select * from fornecedor where email = '$email'";
		$resultado = mysqli_query($conexao, $query);
		$linhas = mysqli_num_rows($resultado); 
		if(!$linhas<=0){
			$id = 2;
			header('location:paginaFornecedor.php?');
		}
		$query = "select * from administrador where email = '$email'";
		$resultado = mysqli_query($conexao, $query);
		$linhas = mysqli_num_rows($resultado); 
		if(!$linhas<=0){
			$id = 2;
			header('location:paginaAdministrador.php?');
		}
	}


}

?>