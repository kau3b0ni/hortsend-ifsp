<?php
require_once("controle-sessao.php");
require_once("controller/produtoController.php");
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
                            <li><a href="#prod_cooperativa" data-toggle="tab">Produtos da Cooperativa</a></li>
                            <li><a href="#fornecedores" data-toggle="tab">Fornecedores</a></li>
                            <li><a href="#clientes" data-toggle="tab">Clientes</a></li>
                            <li><a href="#cestas" data-toggle="tab">Cestas</a></li>
                            <li><a href="#configuracoes" data-toggle="tab">Configuração</a></li>
                            <li><a href="#relatorios" data-toggle="tab">Relatórios</a></li>
                            <li class="pull-left header"><i class="fa fa-user-circle"></i> Painel administrativo </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="produtos">
                                <?php include "adm-produtos.php" ?>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="prod_cooperativa">

                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="fornecedores">
                                fornecedores
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="clientes">
                                clientes
                            </div>
                            <div class="tab-pane" id="cestas">
                                cestas
                            </div>
                            <div class="tab-pane" id="configuracoes">
                                <?php include "adm-config.php" ?>
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