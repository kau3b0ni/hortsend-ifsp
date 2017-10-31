<?php

require_once("config/conexao.php");
require_once("model/Cartao.php");
require_once("controller/cartaoController.php");
require_once("controle-sessao.php");

$id_cliente = $_SESSION['usuario_logado']['cliente_id'];
$nome = $_POST['nome'];
$numero = $_POST['numero'];
$validade = $_POST['validade'];
$codigo = $_POST['codigo'];

$cartao = new Cartao($id_cliente, $numero, $nome, $validade, $codigo);
//operadoraVerificaCartao($cartao);
insereCartao($cartao);



