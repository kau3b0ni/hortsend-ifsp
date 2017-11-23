<div class="box-body table-striped">
    <table class="table table-hover">
        <tr>
            <th >ID</th>
            <th>Nome</th>
            <th>Unidade</th>
            <th>Valor R$</th>
            <th style="width: 15%">Adicionar ao sistema</th>
        </tr>
        <?php
        $produtos = listaProdutosCooperativa();
        //print_r($produtos);
        foreach ($produtos as $produto) :
            ?>
            <tr>
                <td><?php echo $produto->id ?></td>
                <td><?php echo $produto->nome ?></td>
                <td><?php echo $produto->unidade?></td>
                <td><?php echo number_format($produto->valor,2,",",".") ?></td>
                <td class="actions">
                    <form action="forn-produto-cadastro.php" method="post">
                        <input type="hidden"    name="pc_id"        value="<?php echo $produto->id ?>">
                        <input type="hidden"    name="pc_nome"      value="<?php echo $produto->nome ?>">
                        <input type="hidden"    name="pc_unidade"   value="<?php echo $produto->unidade ?>">
                        <input type="hidden"    name="pc_valor"     value="<?php echo $produto->valor ?>">
                        <button style="width: 60%; align-content: center;" class="btn btn-primary btn-sm fa fa-plus-circle"></button>
                    </form>
                </td>
            </tr>
            <?php
        endforeach;

        ?>



    </table>

</div>