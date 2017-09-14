<?php
require_once("cabecalho.php");
?>




	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Cadastro de Adiministrador</h3>
	    		<br />
				<form method="post" action="cadastroAdministrador.php" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matrícula" required="requiored">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="requiored">
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
					
					<button type="submit" class="btn btn-primary form-control">Cadastar</button>
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
