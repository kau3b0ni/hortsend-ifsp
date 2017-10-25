<?php 

require_once("controller/clienteController.php");
require_once("controller/usuarioController.php");
require_once("config/conexao.php");
require_once("model/Cliente.php");
require_once("model/Usuario.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel_acesso = '2'; /*1-Adm 2-Cliente 3-Fornecedor*/





$usuario = new Usuario($email, $senha, $nivel_acesso);
if (verificaEmail($email)==0){
    //header('location:index.php');
    //echo "E-mail ja existe.";
}
insereUsuario($usuario);
$usuario_id = buscaUsuarioId($email);
$cliente = new Cliente($nome,$cpf,$telefone,$usuario_id);
print_r($cliente);
insereCliente($cliente);
//header('location:login.php');


