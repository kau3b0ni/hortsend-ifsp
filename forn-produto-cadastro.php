<?php
require_once("controle-sessao.php");
include("head-para-formularios.php");

//escolhe barra
if(!empty($_SESSION['usuario_logado']['nivel_acesso'])){
    include(carrega_barra_navegacao($_SESSION['usuario_logado']['nivel_acesso']));
}else{
    include("barra-navegacao-index.php");
}
$pc_id = $_POST['pc_id'];
$pc_nome = $_POST['pc_nome'];
$pc_unidade = $_POST['pc_unidade'];
$pc_valor = $_POST['pc_valor'];


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
                    <form action="forn-produto-adicionar.php" method="post" enctype="multipart/form-data">

                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" disabled id="nome" value="<?php echo $pc_nome ?>">
                            <input type="hidden" name="pc_id"   value="<?php echo $pc_id ?>">
                            <input type="hidden" name="pc_nome" value="<?php echo $pc_nome ?>">
                            <input type="hidden" name="pc_unidade" value="<?php echo $pc_unidade ?>">
                            <input type="hidden" name="pc_valor" value="<?php echo $pc_valor ?>">
                            <span class="glyphicon glyphicon-leaf form-control-feedback"></span>
                        </div>
                        <label for="nome">Preço de Custo</label>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="valor" disabled value="<?php echo $pc_valor ?>">
                            <span  form-control-feedback"></span>
                        </div>
                        <label for="nome">Unidade</label>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="unidade" disabled value="<?php echo $pc_unidade ?>">
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

