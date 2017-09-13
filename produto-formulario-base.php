<tr>
	<td>Nome</td>
	<td>
		<input class="form-control" type="text" name="nome" 
			value="<?=$produto->getNome()?>">
	</td>
</tr>
<tr>
	<td>Preço Custo</td>
	<td>
		<input type="number" step="any" class="form-control"" name="preco-custo" 
			value="<?=$produto->getPrecoCusto()?>">
	</td>
</tr>
<tr>
	<td>Preço Venda</td>
	<td>
		<input type="number" step="any" class="form-control"" name="preco-venda" 
			value="<?=$produto->getPrecoVenda()?>">
	</td>
</tr>
<tr>
	<td>Unidade</td>
	<td>
		<input class="form-control" type="text" name="unidade" 
			value="<?=$produto->getUnidade()?>">
	</td>
</tr>
<tr>
	<td>Categoria</td>
	<td>
		<input class="form-control" type="text" name="categoria" 
			value="<?=$produto->getUnidade()?>">
	</td>
</tr>
