<?php
require_once("cabecalho-adm.php");
require_once("model/Produto.php");
?>	

<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Cadastro de Produto</h3>
	    		<br />

			<form action="adiciona-produto.php" method="post">
				<table class="table">
					
					<?php include("produto-formulario-base.php"); ?>

					<tr>
						<td>
							<button class="btn btn-primary" type="submit">Cadastrar</button>
						</td>
					</tr>
				</table>
			</form>

<?php include("rodape.php"); ?>