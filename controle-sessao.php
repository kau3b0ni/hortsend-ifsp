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

function logon_usuario($id,$nivel){
    $_SESSION["usuario_logado"]["usuario_id"]   = $id;
    $_SESSION["usuario_logado"]["nivel_acesso"] = $nivel;
}

function carrega_navegacao($nivel){
    if($nivel==2){
        return "navegacao-cliente.php";
    }
}

function logout() {
	session_destroy();
	session_start();
}