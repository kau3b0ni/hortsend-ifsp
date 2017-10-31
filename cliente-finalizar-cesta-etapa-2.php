<?php
require_once("controle-sessao.php");
require_once("controller/produtoController.php");
require_once("controller/cooProdutoControler.php");
require_once("controller/imagemController.php");
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
    <div class="content-wrapper" style="background-color: white;">
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



            <main>
                <!--Main layout-->
                <div class="container">

                    <!--Page heading-->
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="h1-responsive">Quando receber</h1>
                            <h3 class="h3-responsive">Escolha a data inicial e o período de recebimento da cesta</h3>
                        </div>
                    </div>
                    <!--/.Page heading-->
                    <hr>
                    <form action="cliente-finalizar-cesta-etapa-3.php" method="post"><!-- Cesta -->
                        <div class="row">


                                <div class="col-md-12">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="date" type="date" name="data-inicial" id="data-inicial">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="periodo" type="radio" id="radio11" checked="checked" value="semanal">
                                            <label for="radio11">Toda semana</label>
                                            <input name="periodo" type="radio" id="radio21" value="quinzenal">
                                            <label for="radio21">15 em 15 dias</label>
                                            <input name="mensal" type="radio" id="radio31" value="mensal">
                                            <label for="radio31">Mensal</label>
                                        </div>
                                    </div>
                                </div>


                        </div>
                        <!--/.Cesta -->

                        <!--Botoes-->
                        <div class="row">
                            <hr>
                            <div class="col-lg-12" >
                                <div  class="btn-group-lg">
                                    <a  href="cliente-finalizar-cesta-etapa-1.php" class="btn btn-md btn-primary btn-flat grey">Voltar</a>
                                    <button type="submit" class="btn btn-primary btn-flat">Próxima etapa</button>
                                </div>
                                <br>
                            </div>
                        </div>
                        </>
                    <!--/.Botoes-->

                    <!--Pagination
                    <nav class="row flex-center">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#!" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#!">1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item"><a class="page-link" href="#!">4</a></li>
                            <li class="page-item"><a class="page-link" href="#!">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#!" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!--/.Pagination-->
                </div>
                <!--/.Main layout-->
            </main>





        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->










<?php include("footer-monte-sua-cesta.php");