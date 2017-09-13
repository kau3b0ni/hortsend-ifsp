<?php 
require_once("controller/administradorController.php");
require_once("controller/logicaUsuario.php");
function carregaClasse($nomeDaClasse) {
	require_once("class/".$nomeDaClasse.".php");
}

spl_autoload_register("carregaClasse");

error_reporting(E_ALL ^ E_NOTICE); 

if(!usuarioEstaLogado()){
	header('location:Login.php?id=2');
}


?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>HortSend</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

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

	          	<li><a href="#">Home</a></li>
	          	<li><a href="produto-lista.php">Produtos</a></li>
	          	<li><a href="percentual-formulario.php">Percentual de Lucro</a></li>
	          	<li><a href="#">Vendas Realizadas</a></li>
	          	<li><a href="#">Fornecedores Cadastrados</a></li>
	          	<li><a href="#">Clientes Cadastrados</a></li>
	          	<li><a href="sessao-sair.php">Sair</a></li>
	            
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>