<?php

require_once("controller/clienteController.php");
require_once("controller/usuarioController.php");
require_once("controller/fornecedorController.php");
require_once("config/conexao.php");
require_once("model/Fornecedor.php");
require_once("model/Usuario.php");
require_once("controle-sessao.php");

$razao = $_POST['razao'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
if($_POST['senha'] != $_POST['senha_confirm']){
    mostra_alerta("Senhas não são iguais.","danger");
    header("location:cliente-cadastro.php");
    die();
}
$senha = $_POST['senha'];
$nivel_acesso = '3';
$usuario = new Usuario($email, md5($senha), $nivel_acesso);
$em = verificaEmail($email);
$cn = buscaCpf($cnpj);
if(!empty($em[0])){
    mostra_alerta("E-mail já existe.","warning");
    header("location:fornecedor-cadastro.php");
}else if(!empty($cp[0])) {
    mostra_alerta("CNPJ já existe.","warning");
    header("location:fornecedor-cadastro.php");
}else{
    $usuario_id = insereUsuario($usuario);
    $fornecedor = new Fornecedor($razao, $cnpj, $telefone, $usuario_id);
    insereFornecedor($fornecedor);
    header("location:login.php");
}

//$usuario_id = insereUsuario($usuario);
//$cliente = new Cliente($nome, $cpf, $telefone, $usuario_id);
//print_r($cliente);
//insereCliente($cliente);
//header('location:login.php'); */


