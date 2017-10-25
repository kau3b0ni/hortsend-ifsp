<?php
require_once("../cabecalho-adm.php");
require_once("../model/Produto.php");
require_once("../controle-sessao.php");
?>

    <br /><br />

    <div class="col-md-4">
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
    </div>
    <div class="col-md-4">
    <h3>Precisamos de algumas informações sua antes de começar.</h3>
    <br />

    <form action="adiciona-cliente.php" method="post">
        <table class="table">

            <?php include("cliente-form-base.php"); ?>

            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </td>
            </tr>
        </table>
    </form>

<?php include("../rodape.php"); ?>