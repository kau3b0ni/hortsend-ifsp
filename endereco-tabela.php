<div class="box-body table-responsive">
    <table class="table table-hover">
        <tr>
            <th>Rua</th>
            <th>N.º</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>UF</th>
        </tr>
        <?php
        $enderecos = buscaEndereco($_SESSION["usuario_logado"]["cliente_id"]);
        if(empty($enderecos)){
            ?>
            <tr>
                <td>Nenhum endereço cadastrado</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
        }else {
            foreach ($enderecos as $endereco) :
                ?>
                <tr>
                    <td><?php echo $endereco->rua ?></td>
                    <td><?php echo $endereco->numero ?></td>
                    <td><?php echo $endereco->bairro ?></td>
                    <td><?php echo $endereco->cep ?></td>
                    <td><?php echo $endereco->cidade ?></td>
                    <td><?php echo $endereco->uf ?></td>
                    <td class="actions">
                        <form action="endereco-remover.php" method="post">
                            <input type="hidden" name="item_id" value="<?php $produto[0]->id ?>">
                            <button class="btn btn-primary btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
                <?php
            endforeach;
        }
        ?>
    </table>
    <div class="col-sm-12 pull-right">
        <a style="width: 15%;" href="endereco-cadastro.php" type="button" class="btn btn-primary">Adicionar Endereço</a>
    </div>
</div>