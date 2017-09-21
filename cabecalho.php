<?php 

function carregaClasse($nomeDaClasse) {
	require_once("class/".$nomeDaClasse.".php");
}

spl_autoload_register("carregaClasse");

error_reporting(E_ALL ^ E_NOTICE);  


?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>HortSend</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="js/jQuery.js"></script>
		<script src="js/jquery.mask.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<link rel="stylesheet" href="css/main.css">
	
		<script>
			// código javascript						
		</script>
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="nav-bg navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/logo.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	          	<li><a href="index.php">Home</a></li>
	          	<li><a href="#">Produtos</a></li>
	            <li><a href="cliente-formulario.php">Inscrever-se</a></li>
	            <li class="">
	            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
					<ul class="dropdown-menu" aria-labelledby="entrar">
						<div class="col-md-12">
				    		<p>Você possui uma conta?</h3>
				    		<br />
							<form method="post" action="Autenticacao.php" id="formLogin">
								<div class="form-group">
									<input type="text" class="form-control" id="email" name="email" placeholder="Email" />
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control red" id="senha" name="senha" placeholder="Senha" />
								</div>
								
								<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

								<br /><br />
								
							</form>
						</form>
				  	</ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>