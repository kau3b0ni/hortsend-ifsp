<?php 
require_once("cabecalho.php");
require_once("controller/clienteController.php");
require_once("controller/loginController.php");
require_once("model/Cliente.php");
require_once("model/Login.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel_acesso = 'cliente';
echo $nome;
$cliente = new Cliente($nome,$cpf,$email, $telefone);
$login = new login ($email, $senha, $nivel_acesso);

