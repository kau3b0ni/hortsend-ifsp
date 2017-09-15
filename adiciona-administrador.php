<?php 
require_once("cabecalho-adm.php");
require_once("controller/administradorController.php");
require_once("controller/loginController.php");
require_once("model/Administrador.php");
require_once("model/Login.php");

session_start();

$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel_acesso = 'adm';


$administrador = new Administrador($matricula,$nome,$email);
$login = new login ($email, $senha, $nivel_acesso);

echo $administrador->getEmail;


if(insereAdministrador($conexao, $administrador)) { ?>
	<p class="text-success">O administrador foi adicionado.</p>
<?php 
} else {
?>
	<p class="text-danger">O administrador não foi adicionado.</p>
<?php
}


if(insereLogin($conexao, $login)) { ?>
	<p class="text-success">O login <?= $login->getEmail() ?>, <?= $login->getNivelAcesso() ?> foi adicionado.</p>
<?php 
} else {	
?>
	<p class="text-danger">O produto <?= $login->getEmail() ?> não foi adicionado: <?= $msg?></p>
<?php
}

//header("location:Login.php?id=1");
?>


<?php include("rodape.php"); ?>