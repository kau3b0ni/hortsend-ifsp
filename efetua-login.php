<?php

require_once ("controller/usuarioController.php");
require_once ("config/conexao.php");
require_once ("controle-sessao.php");

//var_dump($_POST);

$email = $_POST['email'];
$senha = md5($_POST['senha']);


$usuario = buscaUsuario($email);
if(!empty($usuario)) {
    if ($senha == $usuario->senha) {
        logon_usuario(buscaUsuario($email)->id, buscaUsuario($email)->nivel_acesso);
    } else {
        mostra_alerta("Senha incorreta", "warning");
        header("location: login.php");
    }
    //print_r($_SESSION['usuario_logado']);
    if($_SESSION['usuario_logado']['nivel_acesso'] == 1){
        header("location:adm-dashboard.php");
    } else if($_SESSION['usuario_logado']['nivel_acesso'] == 2)
        header("location:cliente-painel.php");
}

