<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("controller/loginController.php");
require_once("model/Login.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
echo $email;

$login = new Login($email, $senha, NULL);
echo $login->getEmail;
loginSistema($conexao, $email, $senha);



?>