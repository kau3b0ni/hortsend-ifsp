<?php
session_start();

function mostra_alerta($msg,$tipo){
	$_SESSION["mensagem"] = $msg;
	$_SESSION["tipo"] = $tipo;	
}

function limpa_alerta(){
	unset($_SESSION["mensagem"]);
	unset($_SESSION["tipo"]);
}

/*function usuarioEstaLogado() {
	return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
  if(!usuarioEstaLogado()) {
  	$_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
 	header("Location: index.php");
 	die();
  }
}

function usuarioLogado() {
	return $_SESSION["usuario_logado"];
}

function logaUsuario($email) {
	$_SESSION["usuario_logado"] = $email;
}*/

function logout() {
	session_destroy();
	session_start();
}