<?php
require_once ("controller/clienteController.php");
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
    if($nivel == 2){
        $_SESSION["usuario_logado"]["cliente_id"] = buscaClienteId($id)[0]->id_cliente;
    } else if ($nivel==1) {
        //$_SESSION["usuario_logado"]["cliente_id"] = buscaClienteId($id)[0]->id_cliente;
    }
}

function carrega_barra_navegacao($nivel){
    if($nivel==2){
        return "barra-navegacao-cliente.php";
    } else if ($nivel==1) {
        return "barra-navegacao-adm.php";
    }

}

function logout() {
	session_destroy();
	session_start();
}