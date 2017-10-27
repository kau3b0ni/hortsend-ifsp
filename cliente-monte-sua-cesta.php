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
                                    <h1 class="h1-responsive">Monte sua cesta.</h1>
                                    <h3 class="h3-responsive">Escolha os produtos e no final da página finalize sua cesta.</h3>

                                </div>
                            </div>
                            <!--/.Page heading-->
                            <hr>

                            <!--First row-->
                            <div class="row">
                                <!--First column-->
                                <div class="col-lg-3 col-sm-4 col-xs-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="imagens/produto/uva-verde.png" class="img-overlay img-fluid" alt="">
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Nome da Empresa-->
                                            <h4 class="card-title">Uva verde</h4>
                                            <!--Descrição-->
                                            <p class="card-text"><strong>R$ 8,00</strong> | Kg</p>
                                            <div class="read-more">
                                                <input style="width: 55%; text-align: center;" type="number" name="quantidade" placeholder="0">
                                                <br><a href="#!" class="btn btn-sm btn-primary btn-flat">Colocar na cesta</a>
                                            </div>
                                            <div class="read-more">
                                                <p class="card-text"><br></p>
                                            </div>
                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->
                                </div>
                                <!--/.First column-->

                                <!--Second column-->
                                <div class="col-lg-3 col-sm-4 col-xs-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="imagens/produto/uva-verde.png" class="img-overlay img-fluid" alt="">
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Nome da Empresa-->
                                            <h4 class="card-title">Uva verde</h4>
                                            <!--Descrição-->
                                            <p class="card-text"><strong>R$ 8,00</strong> | Kg</p>
                                            <div class="read-more">
                                                <input style="width: 55%; text-align: center;" type="number" name="quantidade" placeholder="0">
                                                <br><a href="#!" class="btn btn-sm btn-primary btn-flat">Colocar na cesta</a>
                                            </div>
                                            <div class="read-more">
                                                <p class="card-text"><br></p>
                                            </div>
                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->
                                </div>
                                <!--/.Second column-->

                                <!--Third column-->
                                <div class="col-lg-3 col-sm-4 col-xs-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="imagens/produto/uva-verde.png" class="img-overlay img-fluid" alt="">
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Nome da Empresa-->
                                            <h4 class="card-title">Uva verde</h4>
                                            <!--Descrição-->
                                            <p class="card-text"><strong>R$ 8,00</strong> | Kg</p>
                                            <div class="read-more">
                                                <input style="width: 55%; text-align: center;" type="number" name="quantidade" placeholder="0">
                                                <br><a href="#!" class="btn btn-sm btn-primary btn-flat">Colocar na cesta</a>
                                            </div>
                                            <div class="read-more">
                                                <p class="card-text"><br></p>
                                            </div>
                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->
                                </div>
                                <!--/.Third column-->

                                <!--Fourth column-->
                                <div class="col-lg-3 col-sm-4 col-xs-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="imagens/produto/uva-verde.png" class="img-overlay img-fluid" alt="">
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Nome da Empresa-->
                                            <h4 class="card-title">Uva verde</h4>
                                            <!--Descrição-->
                                            <p class="card-text"><strong>R$ 8,00</strong> | Kg</p>
                                            <div class="read-more">
                                                <input style="width: 55%; text-align: center;" type="number" name="quantidade" placeholder="0">
                                                <br><a href="#!" class="btn btn-sm btn-primary btn-flat">Colocar na cesta</a>
                                            </div>
                                            <div class="read-more">
                                                <p class="card-text"><br></p>
                                            </div>
                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->
                                </div>
                                <!--/.Fourth column

                                 <!--First column-->
                                <div class="col-lg-3 col-sm-4 col-xs-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="imagens/produto/uva-verde.png" class="img-overlay img-fluid" alt="">
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Nome da Empresa-->
                                            <h4 class="card-title">Uva verde</h4>
                                            <!--Descrição-->
                                            <p class="card-text"><strong>R$ 8,00</strong> | Kg</p>
                                            <div class="read-more">
                                                <input style="width: 55%; text-align: center;" type="number" name="quantidade" placeholder="0">
                                                <br><a href="#!" class="btn btn-sm btn-primary btn-flat">Colocar na cesta</a>
                                            </div>
                                            <div class="read-more">
                                                <p class="card-text"><br></p>
                                            </div>
                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->
                                </div>
                                <!--/.First column-->

                                <!--Second column-->
                                <div class="col-lg-3 col-sm-4 col-xs-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="imagens/produto/uva-verde.png" class="img-overlay img-fluid" alt="">
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Nome da Empresa-->
                                            <h4 class="card-title">Uva verde</h4>
                                            <!--Descrição-->
                                            <p class="card-text"><strong>R$ 8,00</strong> | Kg</p>
                                            <div class="read-more">
                                                <input style="width: 55%; text-align: center;" type="number" name="quantidade" placeholder="0">
                                                <br><a href="#!" class="btn btn-sm btn-primary btn-flat">Colocar na cesta</a>
                                            </div>
                                            <div class="read-more">
                                                <p class="card-text"><br></p>
                                            </div>
                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->
                                </div>
                                <!--/.Second column-->

                                <!--Third column-->
                                <div class="col-lg-3 col-sm-4 col-xs-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="imagens/produto/uva-verde.png" class="img-overlay img-fluid" alt="">
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Nome da Empresa-->
                                            <h4 class="card-title">Uva verde</h4>
                                            <!--Descrição-->
                                            <p class="card-text"><strong>R$ 8,00</strong> | Kg</p>
                                            <div class="read-more">
                                                <input style="width: 55%; text-align: center;" type="number" name="quantidade" placeholder="0">
                                                <br><a href="#!" class="btn btn-sm btn-primary btn-flat">Colocar na cesta</a>
                                            </div>
                                            <div class="read-more">
                                                <p class="card-text"><br></p>
                                            </div>
                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->
                                </div>
                                <!--/.Third column-->

                                <!--Fourth column-->
                                <div class="col-lg-3 col-sm-4 col-xs-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="imagens/produto/uva-verde.png" class="img-overlay img-fluid" alt="">
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Nome da Empresa-->
                                            <h4 class="card-title">Uva verde</h4>
                                            <!--Descrição-->
                                            <p class="card-text"><strong>R$ 8,00</strong> | Kg</p>
                                            <div class="read-more">
                                                <input style="width: 55%; text-align: center;" type="number" name="quantidade" placeholder="0">
                                                <br><a href="#!" class="btn btn-sm btn-primary btn-flat">Colocar na cesta</a>
                                            </div>
                                            <div class="read-more">
                                                <p class="card-text"><br></p>
                                            </div>
                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->
                                </div>
                                <!--/.Fourth column-->
                            </div>
                            <!--/.First row-->

                            <!--Second row
                            <div class="row">

                            </div>
                            <!--/.Second row-->

                            
                            <!--Botton buttons-->
                            <div class="row">
                                <div class="col-lg-12" >
                                    <div  class="btn-group-lg">
                                        <a  href="index.php" class="btn btn-md btn-primary btn-flat grey">Cancelar</a>
                                        <a  href="" class="btn btn-primary btn-flat">Finalizar cesta</a>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <!--/.Botton buttons-->

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










<?php include("footer.php");