<?php
require_once("controle-sessao.php");
require_once("controller/produtoController.php");
require_once("controller/cooProdutoControler.php");
require_once("controller/imagemController.php");
require_once ("controller/percentualController.php");
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

                    <!-- Listagem de Produtos -->
                    <div class="row">
                        <?php

                        $margem = 1+verPercentual()->percentual_lucro/100;
                        $qtd_produtos = 0;
                        $produtos = listaProdutos();
                        foreach ($produtos as $produto) :
                            if(verificaProdutoCesta($produto->id_produto)==0) {

                                ?>
                                <!-- Card do produto -->
                                <div id="card-produto" class="col-lg-3 col-sm-4 col-xs-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Imagem-->
                                        <div class="view overlay hm-white-slight">
                                            <img src=<?php echo buscaImagemUrl($produto->id_produto)[0]->url ?> class="img-overlay img-fluid"
                                            alt="">
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Imagem-->

                                        <!--Card content-->
                                        <div class="card-deck">
                                            <!--Nome da Empresa-->
                                            <h4 class="card-title"><?php echo $produto->nome_produto; ?></h4>
                                            <!--Descrição-->

                                            <p style="font-size: large" class="card-text">R$
                                                <strong><?php echo number_format($produto->preco_custo * $margem, 2, ',', '.'); ?></strong>
                                                | <?php echo $produto->unidade; ?></p>
                                            <form action="cesta-adiciona-item-session.php" method="post">
                                                <?php if ($produto->unidade == "Kg") { ?>
                                                    <select style="padding: 2%; width: 30%" name="quantidade">
                                                        <option> 0.5</option>
                                                        <option selected="selected"> 1</option>
                                                        <option> 1.5</option>
                                                        <option> 2</option>
                                                        <option> 2.5</option>
                                                        <option> 3</option>
                                                    </select>

                                                <?php } else { ?>
                                                    <select style="padding: 2%; width: 30%" name="quantidade"">
                                                    <option selected="selected"> 1</option>
                                                    <option> 2</option>
                                                    <option> 3</option>
                                                    <option> 4</option>
                                                    <option> 5</option>
                                                    </select>

                                                <?php } ?>
                                                <input type="hidden" name="id_produto"
                                                       value="<?php echo("$produto->id_produto"); ?>">
                                                <br>
                                                <button id="colocar-na-cesta" type="submit"
                                                        class="btn btn-md btn-primary btn-flat">Colocar na cesta
                                                </button>
                                            </form>
                                            <div class="read-more">
                                                <p class="card-text"><br></p>
                                            </div>
                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->
                                </div>
                                <!--/.Card do produto -->
                            <?php };
                            ?>


                            <?php
                        endforeach;
                        ?>
                    </div>
                    <!--/.Listagem de Produtos -->

                    <!--Botoes-->
                    <div class="row">
                        <div class="col-lg-12" >
                            <div  class="btn-group-lg">
                                <a  href="index.php" class="btn btn-md btn-primary btn-flat grey">Cancelar</a>
                                <a href="cliente-finalizar-cesta-etapa-1.php" class="btn btn-primary btn-flat">Próxima etapa</a>
                            </div>
                            <br>
                        </div>
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