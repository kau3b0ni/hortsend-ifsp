"<?php
include("head.php");
require_once("controle-sessao.php");

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
                <div class="alert alert-<?= $_SESSION["tipo"] ?>">
                    <strong><?= $_SESSION["mensagem"] ?></strong>
                </div>
                <?php
            }
            limpa_alerta();
            ?>
            <div class="login-box">
                <div class="login-logo">
                    <b>Cadastro de Endereço</b></a>
                </div>
                <!-- /.login-logo -->
                <div class="box-default">
                    <form action="endereco-adicionar.php" method="post">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="rua" name="rua" placeholder="Nome da Rua" required="requiored">
                            <span class="fa fa-location-arrow form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="numero" name="numero" placeholder="N.º" required="requiored">
                            <span class="fa fa-location-arrow form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required="requiored">
                            <span class="fa fa-location-arrow form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required="requiored">
                            <span class="fa fa-location-arrow form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required="requiored">
                            <span class="fa fa-location-arrow form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <select class="form-control " name="uf">
                                <option>AL</option>
                                <option>AP</option>
                                <option>AM</option>
                                <option>BA</option>
                                <option>CE</option>
                                <option>DF</option>
                                <option>ES</option>
                                <option>GO</option>
                                <option>MA</option>
                                <option>MT</option>
                                <option>MS</option>
                                <option>MG</option>
                                <option>PA</option>
                                <option>PB</option>
                                <option>PR</option>
                                <option>PE</option>
                                <option>PI</option>
                                <option>RJ</option>
                                <option>RN</option>
                                <option>RS</option>
                                <option>RO</option>
                                <option>RR</option>
                                <option>SC</option>
                                <option selected="selected">SP</option>
                                <option>SE</option>
                                <option>TO</option>
                            </select>
                            <span class="form-control-feedback"></span>
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


