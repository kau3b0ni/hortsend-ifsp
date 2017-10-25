<?php 

require_once("controller/clienteController.php");
require_once("controller/usuarioController.php");
require_once("config/conexao.php");
require_once("model/Cliente.php");
require_once("model/Usuario.php");
require_once("controle-sessao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
if($_POST['senha'] != $_POST['senha_confirm']){
    mostra_alerta("Senhas não são iguais.","danger");
    header("location:cliente-cadastro.php");
    die();
}
$senha = $_POST['senha'];
$nivel_acesso = '2';
$usuario = new Usuario($email, md5($senha), $nivel_acesso);
$em = verificaEmail($email);
$cp = buscaCpf($cpf);

if(!empty($em[0])){
    mostra_alerta("E-mail já existe.","warning");
    header("location:cliente-cadastro.php");
}else if(!empty($cp[0])) {
    mostra_alerta("CPF já existe.","warning");
    header("location:cliente-cadastro.php");
}else{
    $usuario_id = insereUsuario($usuario);
    $cliente = new Cliente($nome, $cpf, $telefone, $usuario_id);
    insereCliente($cliente);
    header("location:login.php");
}

//$usuario_id = insereUsuario($usuario);
//$cliente = new Cliente($nome, $cpf, $telefone, $usuario_id);
//print_r($cliente);
//insereCliente($cliente);
//header('location:login.php'); */


