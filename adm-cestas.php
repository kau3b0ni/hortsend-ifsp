
<div class="box-body table-responsive">
    <table class="table table-hover">
        <tr>
            <th>Codigo</th>
            <th>Itens</th>
            <th>Valor</th>
            <th>Data para Entrega</th>
            <th>Endereco</th>
            <th>Pagamento</th>
            <th>Entrega</th>
        </tr>
        <?php
        $cestas = listaCestas();

        if(empty($cestas)){
            ?>
            <tr>
                <td>Nenhuma cesta</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
        }else {
            foreach ($cestas as $cesta) :
                $itens = listaItensCesta($cesta['id_cesta']);
                ?>
                <tr>
                    <td><?php  echo $cesta['id_cesta'] ?></td>
                    <td><?php  foreach ($itens as $item) :
                            echo $item->nome . " - " . $item->quantidade . " - R$ " . number_format($item->valor,2,',','.');
                            echo "<br>";
                        endforeach; ?></td>
                    <td><?php  echo "R$ " .number_format($cesta['valor_total'],2,',','.') ?></td>
                    <td><?php  echo $cesta['data_inicial'] ?></td>
                    <td><?php  echo escreveEnderecoPainel($cesta['endereco_id'])?></td>
                    <td><?php  echo $cesta['estado'] ?>
                    <td><?php echo buscaEstadoEntrega($cesta['id_cesta'])['estado'] ?></td>

                </tr>
                <?php
            endforeach;
        }
        ?>
    </table>

</div>