<?php
require_once("controle-sessao.php");
require_once("controller/enderecoController.php");
require_once("controller/cartaoController.php");
require_once("config/conexao.php");
if(!empty($_SESSION['usuario_logado']['nivel_acesso'])){
    include("head.php");
    include(carrega_barra_navegacao($_SESSION['usuario_logado']['nivel_acesso']));
}else{
    header("location:index.php");
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
                            <li class="active"><a href="#enderecos" data-toggle="tab">Endereços</a></li>
                            <li><a href="#cestas" data-toggle="tab">Cestas</a></li>
                            <li><a href="#dados" data-toggle="tab">Dados Cadastrais</a></li>
                            <li><a href="#cartoes" data-toggle="tab">Cartões de Crédito</a></li>
                            <li class="pull-left header"><i class="fa fa-user-circle"></i> Painel do Cliente </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="enderecos">
                                <?php include "endereco-tabela.php"?>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="cestas">
                                2
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="dados">
                                3
                            </div>
                            <div class="tab-pane" id="cartoes">
                                <?php include "cartao-tabela.php"?>
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