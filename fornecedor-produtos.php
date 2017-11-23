<div class="box-body table-striped">
    <table class="table table-hover">
        <tr>
            <th>Nome</th>
            <th>Demanda</th>
            <th>Estoque Fornecedores</th>
            <th>Unidade</th>
            <th>Preço Custo R$</th>
            <th style="width: 5%"></th>
            <th style="width: 10%"></th>
        </tr>
        <?php

        $produtos = listaProdutosFornecedor($_SESSION['usuario_logado']['id_fornecedor']);
        //print_r($produtos);
        foreach ($produtos as $produto) :
            $coo = buscaProdutoCooperativa($produto->id_produto_coo);
            ?>
            <tr>
                <th><?php echo $coo->nome ?></th>
                <td><?php echo $produto->quantidade_demanda ?></td>
                <td><?php echo $produto->quantidade_estoque ?></td>
                <th><?php echo $coo->unidade ?></th>
                <td><?php echo number_format($coo->valor,2,",",".")?></td>
                <td class="actions">
                    <form action="#" method="post">
                        <input type="hidden"    name="produto_id"        value="<?php echo $produto->id_produto ?>">
                        <button style="width: 100%;" class="btn btn-danger btn-sm fa fa-remove"></button>
                    </form>
                </td>
                <td class="actions">
                    <form action="forn-produto-cadastro-estoque.php" method="post">
                        <input type="hidden"    name="id_produto_fornecedor"        value="<?php echo $produto->id_produto_fornecedor ?>">
                        <input type="hidden"    name="id_produto_coo"        value="<?php echo $coo->id ?>">

                        <button style="width: 100%;" class="btn btn-primary btn-sm "> Atualizar estoque</button>
                    </form>
                </td>
            </tr>
            <?php
        endforeach;

        ?>
    </table>


</div>