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



if(insereCliente($conexao, $cliente)) { ?>
	<p class="text-success">O cliente <?= $cliente->getNome() ?>, <?= $cliente->getCpf() ?> foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $produto->getNome() ?> não foi adicionado: <?= $msg?></p>
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

//header("location:Login.php?id=1");
?>


<?php include("rodape.php"); ?>