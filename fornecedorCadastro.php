<?php
require_once("cabecalho.php");
?>




	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Cadastro de Fornecedor</h3>
	    		<br />
				<form method="post" action="cadastroFornecedor.php" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Razão Social" required="requiored">
					</div>

					<div class="form-group">
						<input type="text" id="cnpj" name="cnpj" class="form-control" placeholder="CNPJ" required="requiored">
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required="requiored">
					</div>

					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" id="senha_confirm" name="senha_confirm" placeholder="Confirme sua senha" required="requiored">
					</div>
					
					<button type="submit" class="btn btn-primary form-control">Cadastrar</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>


		


	   
		
<?php
require_once("rodape.php");
?>
