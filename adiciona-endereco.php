<?php 

require_once("controller/enderecoController.php");
require_once("controller/logicaUsuario.php");
require_once("model/Endereco.php");

$usuarioLogado = usuarioLogado();
$cliente = buscaCliente($conexao, $usuarioLogado);

$cliente_id = $cliente["cliente_id"];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];


$endereco = new Endereco($cliente_id, $rua, $numero, $bairro, $cep, $cidade, $uf);

if(insereEndereco($conexao, $endereco)) { ?>
	<p class="text-success">O endereco foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O endereço não foi adicionado: <?= $msg?></p>
<?php
}
header('location:cliente-painel.php')
?>


<?php include("rodape.php"); ?>