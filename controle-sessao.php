<?php
require_once ("controller/clienteController.php");
require_once ("controller/admController.php");
require_once ("controller/produtoController.php");
require_once ("controller/percentualController.php");
require_once ("controller/fornecedorController.php");
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
        $_SESSION["usuario_logado"]["cliente_id"] = buscaClienteId($id)->id_cliente;
    } else if ($nivel==1) {
        $_SESSION["usuario_logado"]["matricula"] = buscaAdmId($id)->matricula;
    } else {
        $_SESSION["usuario_logado"]["id_fornecedor"] = buscaFornecedor($id)->id_fornecedor;
    }
}

function carrega_barra_navegacao($nivel){
    if($nivel==2){
        return "barra-navegacao-cliente.php";
    } else if ($nivel==1) {
        return "barra-navegacao-adm.php";
    } else {
        return "barra-navegacao-fornecedor.php";
    }

}

//FUNCOES DA CESTA
function limpa_cesta(){
    unset($_SESSION['cesta']);
    unset($_SESSION['itens']);
}


/**
 *
 */
function sessao_inicia_cesta(){
    limpa_cesta();
    $_SESSION['cesta']['indice_itens'] = 0;
}

/**
 * Recebe um $item(array) com quantidade e id_produto e
 * guarda no array 'itens' da SESSION, incrementando o
 * indice deste array.
 */
function sessao_adicionar_item($item){
    $_SESSION['itens'][$_SESSION['cesta']['indice_itens']] = $item;
    $_SESSION['cesta']['indice_itens']++;
}

function sessao_remover_item($id_produto){
    $i=0;
    foreach ($_SESSION['itens'] as $iten) :
        if ($iten['id_produto']==$id_produto){
            $pos = $i;
        }
        $i++;
    endforeach;
    unset($_SESSION['itens'][$pos]);
}

function sessao_calcula_total_itens(){
    $margem = 1+verPercentual()->percentual_lucro/100;
    $total = 0;
    foreach ($_SESSION['itens'] as $iten) :
        $total+=buscaProduto($iten['id_produto'])->preco_custo * $iten['quantidade'] * $margem;
    endforeach;
    return $total;
}

function logout() {
	session_destroy();
	session_start();
}

function verificaProdutoCesta($id){
    if ($_SESSION['cesta']['indice_itens']>0) {

        foreach ($_SESSION['itens'] as $item) :
            if ($item['id_produto'] == $id){
                return 1;
            }
        endforeach;
        return 0;


    }

}