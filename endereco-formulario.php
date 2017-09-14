<?php
require_once("cabecalhoCliente.php");
require_once("model/Endereco.php");
?>	

<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Cadastro de Endereço</h3>
	    		<br />

			<form action="adiciona-endereco.php" method="post">
				<table class="table">
					
					<?php include("endereco-formulario-base.php"); ?>

					<tr>
						<td>
							<button class="btn btn-primary" type="submit">Cadastrar</button>
						</td>
					</tr>
				</table>
			</form>

<?php include("rodape.php"); ?>