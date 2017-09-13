<?php
require_once("cabecalho.php");

$id = $_GET['id'];


?>


	    <div class="container">
	    	<?php
	    	if($id == 1){
	    		?>
	    		<div class="alert alert-success">
  					<strong>Cadastro Realizado!</strong> Tudo certo, agora faça login para ter acesso ao HortSend.
				</div>
	    		<?php
	    	} else {
	    		?>
	    		<div class="alert alert-danger">
  					<strong>Tem algo errado!</strong> Confira se o email e a senha estão corretos.
				</div>
	    		<?php
	    	}
	    	?>
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3 align="center">Login</h3>
	    		<br />
				<form method="post" action="Autenticacao.php" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="nome" name="email" placeholder="E-mail" required="requiored">
					</div>

					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
					</div>
					
					<button type="submit" class="btn btn-primary form-control">Entrar</button>
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
