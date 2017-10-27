<?php
require_once("controle-sessao.php");
include("head.php");

//escolhe barra
if(!empty($_SESSION['usuario_logado']['nivel_acesso'])){
    include(carrega_barra_navegacao($_SESSION['usuario_logado']['nivel_acesso']));
}else{
    include("barra-navegacao-index.php");
}

?>


    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <?php
            if (isset($_SESSION["mensagem"])) {
                ?>
                <br>
                <br>
                <div class="alert alert-<?= $_SESSION["tipo"] ?>">
                    <strong><?= $_SESSION["mensagem"] ?></strong>
                </div>
                <?php
            }
            limpa_alerta();
            ?>
            <div class="login-box">
                <div class="login-logo">
                    <b>Cadastro de Administrador</b></a>
                </div>
                <!-- /.login-logo -->
                <div class="login-box-body">
                    <form action="adm-adicionar.php" method="post">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="requiored">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required="requiored">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" id="senha_confirm" name="senha_confirm" placeholder="Confirme sua senha" required="requiored">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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

<?php include("footer.php");

