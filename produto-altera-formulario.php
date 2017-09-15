<?php
require_once("cabecalho-adm.php");
require_once("model/Produto.php");
require_once("controller/ProdutoController.php");

$id = $_GET['id'];
$produto = buscaProduto($id);

?>
<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Alterar Produto</h3>
	    		<br />
			<form action="altera-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$produto->id_produto?>">
				<table class="table">
					<?php include("produto-altera-form-base.php"); ?>
					<tr>
						<td>
							<button class="btn btn-primary" type="submit">Alterar</button>
						</td>
					</tr>
				</table>
			</form>

<?php include("rodape.php"); ?>