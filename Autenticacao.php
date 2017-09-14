<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("controller/loginController.php");
require_once("model/Login.php");


require_once("controller/logicaUsuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario == null) {
	$_SESSION["danger"] = "Usuário ou senha inválido.";
	header("Location: Login.php");
} else {
	$_SESSION["success"] = "Usuário logado com sucesso.";
	logaUsuario($usuario["email"]);
	if($usuario["nivel_acesso"]=='cliente'){
		$_SESSION["success"] = "Usuário logado com sucesso.";
		header("Location: cliente-painel.php");
	}
		
		else 
		if($usuario["nivel_acesso"]=='adm'){

			header("Location: administrador-painel.php");
		}
}
die();


?>