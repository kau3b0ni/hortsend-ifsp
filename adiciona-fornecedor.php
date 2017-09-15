<?php 
require_once("cabecalho.php");
require_once("controller/fornecedorController.php");
require_once("controller/loginController.php");
require_once("model/Fornecedor.php");
require_once("model/Login.php");

$razao_social = $_POST['razao_social'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel_acesso = 'fornecedor';
$fornecedor = new Fornecedor($razao_social,$cnpj,$email, $telefone);
$login = new login ($email, $senha, $nivel_acesso);



if(insereFornecedor($conexao, $fornecedor)) { ?>
	<p class="text-success">O fornecedor <?= $fornecedor->getRazaoSocial() ?>, <?= $fornecedor->getCnpj() ?> foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $fornecedor->getRazaoSocial() ?> não foi adicionado: <?= $msg?></p>
<?php
}


if(insereLogin($conexao, $login)) { ?>
	<p class="text-success">O login <?= $login->getEmail() ?>, <?= $login->getNivelAcesso() ?> foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $login->getEmail() ?> não foi adicionado: <?= $msg?></p>
<?php
}

header("location:Login.php?id=1");
?>


