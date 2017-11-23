<?php
require_once("controle-sessao.php");
require_once("controller/produtoFornController.php");
require_once("controller/cooProdutoControler.php");
require_once("config/conexao.php");
require_once("config/conexao_cooperativa.php");
if(!empty($_SESSION['usuario_logado']['nivel_acesso'])){
    include("head.php");
    include(carrega_barra_navegacao($_SESSION['usuario_logado']['nivel_acesso']));
}

?>
<?php

//$cliente_email = usuarioLogado();

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
            <div class="box-default">
                <div class="box-header">

                </div>
                <!-- /.login-logo -->
                <div class="login-box-body">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                            <li class="active"><a href="#produtos" data-toggle="tab">Produtos</a></li>
                            <li><a href="#prod_cooperativa" data-toggle="tab">Cadastrar Produtos</a></li>
                            <li><a href="#encomendas" data-toggle="tab">Encomendas</a></li>
                            <li><a href="#relatorios" data-toggle="tab">Relatórios</a></li>
                            <li class="pull-left header"><i class="fa fa-user-circle"></i> Painel do Fornecedor </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="produtos">
                                <?php include "fornecedor-produtos.php" ?>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="prod_cooperativa">
                                <?php include "forn-produtos-cooperativa.php" ?>
                            </div>

                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="encomendas">
                                encomendas
                            </div>
                            <div class="tab-pane" id="relatorios">
                                relatorios
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>



                </div>
                <!-- /.login-box-body -->
            </div><!-- /.login-box -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->










<?php include("footer.php");