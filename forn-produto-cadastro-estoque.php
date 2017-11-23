<?php
require_once("controle-sessao.php");
require_once("config/conexao_cooperativa.php");
require_once ("controller/cooProdutoControler.php");
include("head-para-formularios.php");

//escolhe barra
if(!empty($_SESSION['usuario_logado']['nivel_acesso'])){
    include(carrega_barra_navegacao($_SESSION['usuario_logado']['nivel_acesso']));
}else{
    include("barra-navegacao-index.php");
}
$_POST['id_produto_fornecedor'];

$coo = buscaProdutoCooperativa($_POST['id_produto_coo']);

?>


    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
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
            <div class="login-box">
                <div class="login-logo">
                    <b>Cadastro de Produto</b></a>
                </div>
                <!-- /.login-logo -->
                <div class="login-box-body">
                    <form action="fornecedor-atualizar-estoque.php" method="post" enctype="multipart/form-data">

                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" disabled id="nome" value="<?php echo $coo->nome ?>">
                        </div>

                        <label for="nome">Unidade</label>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="unidade" disabled value="<?php echo $coo->unidade ?>">
                            <input type="hidden" class="form-control" id="unidade" name="id_produto_fornecedor" value="<?php echo $_POST['id_produto_fornecedor']; ?>">

                            <span class="glyphicon glyphicons-coins form-control-feedback"></span>
                        </div>

                        <label for="nome">Quantidade em Estoque</label>
                        <div class="form-group has-feedback">
                            <input type="number" class="form-control" id="quantidade_estoque" name="quantidade_estoque" required>
                            <span class="glyphicon glyphicons-coins form-control-feedback"></span>
                        </div>


                        <div class="row">
                            <div class="col-xs-4">
                                <button type="button" href="index.php" class="btn btn-secondary btn-block btn-flat">Limpar</button>
                            </div>

                            <div class="col-xs-4">

                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Enviar</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>



                </div>
                <!-- /.login-box-body -->
            </div><!-- /.login-box -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->

<?php include("footer-para-formularios.php");

