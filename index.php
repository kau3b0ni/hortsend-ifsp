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

            <header class="jumbotron">
                <h1 class="display-3">Bem vindo a HortSend!</h1>
                <p class="lead">Produtos de qualidade direto do fornecedor para você e o melhor: SEM PRECISAR SAIR DE CASA! <br>
                                Cadastre-se, monte sua cesta e aproveite</p>
                <a href="cliente-cadastro.php" class="btn btn-primary btn-lg">Comece agora!</a>
            </header>

            <!-- Main content -->
            <section class="content">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img alt="Bootstrap Thumbnail First" src="imagens/mulher.jpg">
                        <div class="caption">
                            <h3>
                                Como funciona
                            </h3>
                            <p>
                                Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Quem num gosta di mim que vai caçá sua turmis!
                            </p>
                            <p>
                                <a class="btn btn-primary" href="#">Saiba mais</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img alt="Bootstrap Thumbnail Second" src="imagens/cesta.jpg">
                        <div class="caption">
                            <h3>
                                Nossos produtos
                            </h3>
                            <p>
                                Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Quem num gosta di mim que vai caçá sua turmis!
                            </p>
                            <p>
                                <a class="btn btn-primary" href="#">Ver produtos</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img alt="Bootstrap Thumbnail Third" src="imagens/produtor.jpg">
                        <div class="caption">
                            <h3>
                                Fornecedor
                            </h3>
                            <p>
                                Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Quem num gosta di mim que vai caçá sua turmis!
                            </p>
                            <p>
                                <a class="btn btn-primary" href="fornecedorCadastro.php">Cadastre-se</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->

    <?php include("footer.php");