<?php 
//require_once("cabecalhoAdministrador.php");
require_once("controller/produtoController.php");

require_once("model/Produto.php");




$nome = $_POST['nome'];
$preco_custo = $_POST['preco-custo'];
$preco_venda = $_POST['preco-venda'];
$unidade = $_POST['unidade'];



$produto = new Produto($nome, $preco_custo, $preco_venda, $unidade);

if(insereProduto($produto)) { ?>
	<p class="text-success">O produto <?= $produto->getNome() ?>, <?= $produto->getPrecoVenda() ?> foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $produto->getNome() ?> não foi adicionado: <?= $msg?></p>
<?php
}
header('location:produto-lista.php?id=1')
?>


<?php include("rodape.php"); ?>