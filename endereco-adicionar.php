<?php

require_once("controller/enderecoController.php");
require_once("config/conexao.php");
require_once("model/Endereco.php");
require_once("controle-sessao.php");

$cliente_id = $_SESSION["usuario_logado"]["cliente_id"];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];


$end = new Endereco($cliente_id, $rua, $numero, $bairro, $cep, $cidade, $uf);
print_r($end);
insereEndereco($end);
header("location:cliente-painel.php#enderecos");