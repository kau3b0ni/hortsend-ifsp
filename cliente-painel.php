<?php
require_once("cabecalhoCliente.php");
require_once("controller/produtoController.php");
require_once("controller/logicaUsuario.php");
require_once("model/Produto.php");
?>
	<?php 
	
	$cliente_email = usuarioLogado();
	
	?> 
	<div id="main" class="container-fluid" style="margin-top: 10px">
	<?php

	    	if($_GET['id'] == 1){
	    		?>
	    		<div class="alert alert-success">
  					<strong>Produto Cadastrado!</strong>
				</div>
	    		<?php
	    	} else {
	    		if($_GET['id'] == 2){
	    		?>
	    		<div class="alert alert-warning">
  					<strong>Alteração</strong> Produto alterado!.
				</div>
	    		<?php
	    	}
	    	}
	    	?>
	<br /><br />
 
	<div class="row">
        <div class="col-md-12"> 
            <h2 class="text-center">Minha Conta</h3>
        </div>
		<div class="col-md-12">
			<ul class="nav nav-tabs">
				<li class="disabled">
					<a href="#">Cestas</a>
				</li>
				<li class="active">
					<a href="#">Enderecos</a>
				</li>
				<li class="disabled">
					<a href="#">Dados cadastrais</a>
				</li>				
			</ul>
				<div id="top" class="row">
					
					<div class="col-sm-12">
						<a href="../endereco-formulario.php" class="btn btn-primary pull-right h2">Novo endereco</a>
					</div>
				</div> 
			<?php include("endereco-lista.php"); ?>
		</div>
	</div>



<?php include("rodape.php"); ?>