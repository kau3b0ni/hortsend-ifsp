<div class="box-body table-striped">
    <table class="table table-hover">
        <tr>
            <th>Nome</th>
            <th>Demanda</th>
            <th>Estoque Fornecedores</th>
            <th>Unidade</th>
            <th>Preço Custo R$</th>
            <th>Preço Venda R$</th>
            <th style="width: 5%"></th>
            <th style="width: 5%"></th>
        </tr>
        <?php
        $margem_lucro = 1.8;
        $produtos = listaProdutos();
        //print_r($produtos);
        foreach ($produtos as $produto) :
            ?>
            <tr>
                <th><?php echo $produto->nome_produto ?></th>
                <td><?php echo $produto->demanda_geral ?></td>
                <td>0</td>
                <td><?php echo $produto->unidade?></td>
                <td><?php echo number_format($produto->preco_custo,2,",",".")?></td>
                <td><?php echo number_format($produto->preco_custo * $margem_lucro,2,",",".")?></td>
                <td class="actions">
                    <form action="adm-produto-remover.php" method="post">
                        <input type="hidden"    name="produto_id"        value="<?php echo $produto->id_produto ?>">
                        <button style="width: 100%;" class="btn btn-danger btn-sm fa fa-remove"></button>
                    </form>
                </td>
                <td class="actions">
                    <form action="adm-produto-editar-foto.php" method="post">
                        <input type="hidden"    name="editar_foto"        value="<?php echo $produto->id ?>">
                        <button style="width: 100%;height: 100%;" class="btn btn-primary btn-sm fa fa-camera"> </button>
                    </form>
                </td>
            </tr>
            <?php
        endforeach;

        ?>
    </table>


</div>