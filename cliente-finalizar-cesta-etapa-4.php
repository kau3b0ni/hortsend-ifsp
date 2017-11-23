<?php
require_once("controle-sessao.php");
require_once("controller/produtoController.php");
require_once("controller/cooProdutoControler.php");
require_once("controller/imagemController.php");
require_once("controller/enderecoController.php");
require_once("config/conexao.php");
require_once("config/conexao_cooperativa.php");
if(!empty($_SESSION['usuario_logado']['nivel_acesso'])){
    include("head.php");
    include(carrega_barra_navegacao($_SESSION['usuario_logado']['nivel_acesso']));
}

?>
<?php

//print_r($_POST);

$_SESSION['cesta']['endereco_id'] = $_POST['id_endereco'];
$cep = buscaCep($_SESSION['cesta']['endereco_id'])[0]->cep;
$_SESSION['cesta']['valor_entrega'] = calculaFrete($cep);
$_SESSION['cesta']['valor_total'] = $_SESSION['cesta']['valor_entrega'] + $_SESSION['cesta']['valor_produtos'];
$cesta = $_SESSION['cesta'];
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
                <h1 class="h1-responsive">Veja como ficou sua cesta</h1>


            </div>
        </div>
        <!--/.Page heading-->
        <hr>

        <!-- Cesta -->
        <div class="row">


            <div class="col-md-12">
                <h2 class="h2-responsive">Produtos</h2>
                <div class="row">
                    <?php
                    $margem = 1+verPercentual()->percentual_lucro/100;
                    $qtd_produtos = 0;
                    $itens = $_SESSION['itens'];
                    if(!empty($itens)){
                        foreach ($itens as $item) :
                            $produto = buscaProduto($item['id_produto']);
                            ?>
                            <!-- Card do produto -->
                            <div id="card-produto" class="col-lg-2 col-sm-3 col-xs-6">
                                <!--Card-->
                                <div class="card">

                                    <!--Imagem-->
                                    <div class="view overlay hm-white-slight">
                                        <img src=<?php echo buscaImagemUrl($item['id_produto'])[0]->url ?> class="img-overlay img-fluid"
                                        alt="">
                                        <a href="#!">
                                            <div class="mask"></div>
                                        </a>
                                    </div>
                                    <!--/.Imagem-->

                                    <!--Card content-->
                                    <div class="card-deck">
                                        <!--Nome do Produto-->
                                        <h4 class="card-title"><?php echo $produto->nome_produto; ?></h4>
                                        <!--Descrição-->

                                        <p style="font-size: large" class="card-text">R$

                                            <strong><?php echo number_format($produto->preco_custo * $margem * $item['quantidade'], 2, ',', '.'); ?></strong>
                                            <br> <?php echo $item['quantidade']." ".$produto->unidade."(s)"; ?></p>


                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->
                            </div>
                            <!--/.Card do produto -->
                            <?php ;
                            ?>


                            <?php
                        endforeach;
                    }

                    ?>
                </div>
                <!-- Data e Periodo -->
                <div class="col-md-12">

                    <div class="col-md-12">
                        <div class="form-group">
                            <h2 class="h2-responsive">Data inicial -  <strong><?php echo $cesta['data_inicial'] ?></strong> </h2>
                            <h2 class="h2-responsive">Periodo - <strong><?php echo $cesta['periodo'] ?></strong> </h2>
                            <h2 class="h2-responsive">Endereço - <strong><?php echo escreveEndereco($cesta['endereco_id']) ?></strong> </h2>
                            <h2 class="h2-responsive">Valor do frete - R$ <strong><?php echo number_format($cesta['valor_entrega'],'2',',','.') ?></strong> </h2>
                            <h2 class="h2-responsive">Valor dos Produtos - R$ <strong><?php echo number_format($cesta['valor_produtos'],'2',',','.') ?></strong> </h2>
                            <h1 class="h1-responsive">Total - R$ <strong><?php echo number_format($cesta['valor_total'],'2',',','.') ?></strong> </h1>
                        </div>
                        <hr>
                    </div>

                <!--/.Data e Period -->







            </div>



        </div>
        <!--/.Cesta -->

        <!--Botoes-->
        <div class="row">
            <hr>
            <div class="col-lg-12" >
                <div  class="btn-group-lg">
                    <a  href="cliente-finalizar-cesta-etapa-3.php" class="btn btn-md btn-primary btn-flat grey">Voltar</a>
                    <a href="cesta-confirmar.php" class="btn btn-primary btn-flat">Confirmar</a>
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


?>


