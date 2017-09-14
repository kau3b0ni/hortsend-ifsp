
		<div id="list" class="row">
			<div class="table-responsive col-md-12">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
					<tr>
					<th>ID</th>
					<th>Nome do Logradouro</th>
					<th>Número</th>
					<th>Bairro</th>
					<th>Cidade</th>
					<th>UF</th>
					<th class="actions"></th>
					<th class="actions"></th>
					</tr>
					<?php
					//$enderecos = listaEnderecos($conexao);
					//foreach($enderecos as $endereco) :
					?>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							
							<td class="actions">
								<a class="btn btn-warning" href="#">Editar</a>
							</td>
							<td class="actions">
								<form action="#" method="post">
									<input type="hidden" name="id" value="<?=$produto->getId()?>">
									<button class="btn btn-danger">remover</button>
								</form>								
							</td>
							
						
						</tr>

						

						
					<?php
					//endforeach
					?>	
				</table>
				<a href="endereco-formulario.php" class="btn btn-primary pull-right h2">Novo</a>
                
            </div>
		</div><!-- /#list -->