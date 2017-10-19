<?php include("head.php") ?>
<?php include("header-nav-index.php")?>

    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <div class="login-box">
                <div class="login-logo">
                    <b>Cadastre-se</b></a>
                </div>
                <!-- /.login-logo -->
                <div class="login-box-body"> 
                    <form action="../../index2.html" method="post">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="requiored">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required="requiored">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required="requiored">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
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

