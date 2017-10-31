<?php
include("head-para-formularios.php");
include("barra-navegacao-index.php");
require_once("controle-sessao.php");

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
                    <b>Cadastro de Cartão de Crédito</b></a>
                </div>
                <!-- /.login-logo -->
                <div class="login-box-body">
                    <form action="cartao-adicionar.php" method="post">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome impresso no cartao" required="requiored">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="numero" name="numero" placeholder="Numero" required="requiored">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="validade" name="validade" placeholder="Validade" required="requiored">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo de segurança" required="requiored">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>

                        <div class="row">
                            <div class="col-xs-4">
                                <button type="reset" class="btn btn-secondary btn-block btn-flat">Limpar</button>
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

