<?php
require_once("cabecalhoAdministrador.php");
require_once("controller/produtoController.php");
require_once("model/Produto.php");
?>
	    	
	<div id="main" class="container-fluid" style="margin-top: 50px">
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
  					<strong>Alteração realizada!</strong>
				</div>
	    		<?php
	    	}
	    	}
	    	?>
	<br /><br />
 
		 	<div id="top" class="row">
				<div class="col-sm-3">
					<h2>Produtos</h2>
				</div>
				<div class="col-sm-6">
					
					<div class="input-group h2">
						<input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar produtos">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="submit">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
					
				</div>
				<div class="col-sm-3">
					<a href="produto-formulario.php" class="btn btn-primary pull-right h2">Novo produto</a>
				</div>
			</div> <!-- /#top -->
 
 
 		<hr />	
		<div id="list" class="row">
			<div class="table-responsive col-md-12">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
					<tr>
					<th>ID</th>
					<th>Nome do Produto</th>
					<th>Preço de Custo</th>
					<th>Preço de Venda</th>
					<th>Unidade</th>
					<th class="actions"></th>
					<th class="actions"></th>
					</tr>
					<?php
					$produtos = listaProdutos($conexao);
					foreach($produtos as $produto) :
					?>
						<tr>
							<td><?= $produto->getId() ?></td>
							<td><?= $produto->getNome() ?></td>
							<td><?= $produto->getPrecoCusto() ?></td>
							<td><?= $produto->getPrecoVenda() ?></td>
							<td><?= $produto->getUnidade() ?></td>
							
							<td class="actions">
								<a class="btn btn-warning" href="produto-altera-formulario.php?id=<?php echo $produto->getId()?>">Editar</a>
							</td>
							<td class="actions">
								<form action="remove-produto.php" method="post">
									<input type="hidden" name="id" value="<?=$produto->getId()?>">
									<button class="btn btn-danger">remover</button>
								</form>								
							</td>
							
						
						</tr>

						
					<?php
					endforeach
					?>	
				</table>
			</div>
		</div><!-- /#list -->
		 </div> <!-- /#main -->	



<?php include("rodape.php"); ?>