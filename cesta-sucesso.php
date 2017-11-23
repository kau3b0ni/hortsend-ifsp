<?php
require_once("controle-sessao.php");
require_once "controller/cartaoController.php";
require_once("config/conexao.php");
require_once("config/conexao_cooperativa.php");
if(!empty($_SESSION['usuario_logado']['nivel_acesso'])){
    include("head.php");
    include(carrega_barra_navegacao($_SESSION['usuario_logado']['nivel_acesso']));
}

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
                            <h3 class="h1-responsive">Pagamento confirmado.
                                <h3 class="h3-responsive">Sua cesta será preparada e enviada.</h3>
                            <h3 class="h3-responsive">Acompanhe pelo <a href="cliente-painel.php">Painel do Cliente</a></h3>
                        </div>
                    </div>
                    <!--/.Page heading-->
                    <hr>

                </div>


        </div>
        <!--/.Cesta -->

        <!--Botoes-->

    </div>
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