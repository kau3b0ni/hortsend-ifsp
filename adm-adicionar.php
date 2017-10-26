<?php
require_once("controller/admController.php");
require_once("controller/usuarioController.php");
require_once("config/conexao.php");
require_once("model/Administrador.php");
require_once("model/Usuario.php");
require_once("controle-sessao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];

if($_POST['senha'] != $_POST['senha_confirm']){
    mostra_alerta("Senhas não são iguais.","danger");
    header("location:adm-cadastro.php");
    die();
}
$senha = $_POST['senha'];
$nivel_acesso = '1';

$usuario = new Usuario($email, md5($senha), $nivel_acesso);

$em = verificaEmail($email);

if(!empty($em[0])){
    mostra_alerta("E-mail já existe.","warning");
    header("location:adm-cadastro.php");
}else{

    $usuario_id = insereUsuario($usuario);
    //echo $usuario_id;

    $adm = new Administrador($nome, $usuario_id);
    insereAdm($adm);
    header("location:index.php");
}

//$usuario_id = insereUsuario($usuario);
//$cliente = new Cliente($nome, $cpf, $telefone, $usuario_id);
//print_r($cliente);
//insereCliente($cliente);
//header('location:login.php'); */


