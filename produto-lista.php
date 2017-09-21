<?php
require_once("cabecalho-adm.php");
require_once("controller/produtoController.php");
require_once("model/Produto.php");
require_once("alerta-sessao.php");
?>
            
    <div id="main" class="container-fluid" style="margin-top: 50px">
    
        <!-- #alerta da operação -->
        <?php
       		if (isset($_SESSION["mensagem"])) {
        ?>
        <div class="alert alert-<?= $_SESSION["tipo"] ?>">
        	<strong><?= $_SESSION["mensagem"] ?></strong>
        </div>
        <?php
        }
            limpa_alerta();
        ?>
        

    <br /><br />
            <!-- #pesquisa -->
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
            </div> <!-- /#pesquisa -->

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
                    $produtos = listaProdutos();
                    
                    foreach ($produtos as $produto) :
                    ?>
                        <tr>                            
                            <td><?= $produto->id_produto ?></td>
                            <td><?= $produto->nome_produto ?></td>
                            <td><?= $produto->preco_custo ?></td>
                            <td><?= $produto->preco_venda ?></td>
                            <td><?= $produto->unidade ?></td>                   
                            
                            <td class="actions">
                                <a class="btn btn-warning" href="produto-altera-formulario.php?id=<?php echo $produto->id_produto?>">Editar</a>
                            </td>
                            <td class="actions">
                                <form action="remove-produto.php" method="post">
                                    <input type="hidden" name="id" value="<?=$produto->id_produto?>">
                                    <button class="btn btn-danger">remover</button>
                                </form>                             
                            </td>
                            
                        
                        </tr>

                        
                    <?php
                    endforeach
                    ?>  
                </table>
            </div><!-- /#table -->
        </div><!-- /#list -->
    </div> <!-- /#main --> 



<?php include("rodape.php"); ?>
