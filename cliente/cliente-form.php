<?php
require_once("../cabecalho-adm.php");
require_once("../model/Produto.php");
?>

    <br /><br />

    <div class="col-md-4"></div>
    <div class="col-md-4">
    <h3>>Precisamos de algumas informações sua antes de começar.</h3>
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