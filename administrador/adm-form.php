<?php
require_once("../model/Produto.php");
?>	
<?php include("../cabecalho.php"); ?>

<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
				<h3>Cadastro de Administrador</h3>
				<br />
				<form method="post" action="adiciona-adm.php" id="formCadastrarse">					
						
						<?php include("adm-form-base.php"); ?>

					<button type="submit" class="btn btn-primary form-control">Cadastar</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

<?php include("../rodape.php"); ?>