<div class="box-body table-responsive">
    <table class="table table-hover">
        <tr>
            <th>Numero</th>
            <th>Nome</th>
            <th>Validade</th>
            <th style="width: 8%"></th>
        </tr>
        <?php
        $cartoes = buscaCartaoCliente($_SESSION["usuario_logado"]["cliente_id"]);
        if(empty($cartoes)){
            ?>
            <tr>
                <td>Nenhum cartão cadastrado</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
        }else {
            foreach ($cartoes as $cartao) :
                ?>
                <tr>
                    <td><?php echo $cartao->numero ?></td>
                    <td><?php echo $cartao->nome ?></td>
                    <td><?php echo $cartao->validade ?></td>
                    <td class="actions">
                        <form action="cartao-remover.php" method="post">
                            <input type="hidden" name="item_id" value="<?php $cartao->id_cartao ?>">
                            <button class="btn btn-danger btn-sm fa fa-eraser">
                        </form>
                    </td>
                </tr>
                <?php
            endforeach;
        }
        ?>
    </table>
    <div class="col-sm-12 pull-right">
        <a style="width: 20%;" href="cartao-cadastro.php" type="button" class="btn btn-md btn-primary">Adicionar Cartão</a>
    </div>
</div>