<?php 
require_once("cabecalho.php");

$produtoDao = new ProdutoDao($conexao);

if($produtoDao->insereProduto($produto)) { ?>
	<p class="text-success">O produto <?= $produto->getNome() ?> foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $produto->getNome() ?> não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>