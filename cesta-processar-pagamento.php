<?php

require_once("config/conexao.php");
require_once("model/Cartao.php");
require_once("model/Entrega.php");
require_once("controller/cartaoController.php");
require_once("controller/cestaController.php");
require_once("controller/entregaController.php");
require_once("controle-sessao.php");


$cartao_id = $_POST['id_cartao'];

if(cartaoRequisicaoOperadora($cartao_id)==0){
    mostra_alerta("Cartão recusado","danger");
    mudaEstadoCesta($_SESSION['cesta']['id_cesta'],"pendente");
    header("location: cesta-pagamento.php");
}else {
    mostra_alerta("Sua cesta foi confirmada. Acompanhe o envio através do Painel do Cliente.","success");
    mudaEstadoCesta($_SESSION['cesta']['id_cesta'],"pago");
    $entrega = new Entrega($_SESSION['cesta']['id_cesta'], $_SESSION['cesta']['valor_total'],$_SESSION['cesta']['data_inicial'], "agendado");
    insereEntrega($entrega);
    header("location: cesta-sucesso.php");
}