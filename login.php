<?php
include("head.php");
include("navegacao-index.php");
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
                    <b>Login</b></a>
                </div>
                <!-- /.login-logo -->
                <div class="login-box-body">
                    <p class="login-box-msg">Entre com seus dados de login</p>

                    <form action="efetua-login.php" method="post">
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="senha" placeholder="Password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox"> Lembre-me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>


                    <!-- /.social-auth-links -->

                    <a href="#">Esqueci minha senha</a><br>
                    <a href="register.html" class="text-center">Não possuo cadastro</a>

                </div>
                <!-- /.login-box-body -->
            </div>            <!-- /.login-box -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->

<?php include("footer.php");