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
    header("location:index.php");
}

