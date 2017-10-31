<?php
require 'vendor/autoload.php';
require_once("controller/cooProdutoControler.php");
require_once("controller/produtoController.php");
require_once("controller/imagemController.php");
require_once("config/conexao.php");
require_once("model/Produto.php");
require_once("model/Imagem.php");
require_once("controle-sessao.php");
require_once("imagem-upload.php");

if(isset($_FILES['arquivo'])){
    $ext = strtolower(substr($_FILES['arquivo']['name'],-4)); //Pegando extensão do arquivo
    $new_name = strtolower($_POST['pc_nome']) . $ext; //Definindo um novo nome para o arquivo
    $dir = 'imagens/produtos/'; //Diretório para uploads
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
}
$source_file = "imagens/produtos/".$new_name;
$new_source_file = "imagens/produtos/resized_".$new_name;
resize_crop_image(300, 200, $source_file, $new_source_file);

//produto
$nome_produto = $_POST['pc_nome'];
$demanda = 0;
$unidade = $_POST['pc_unidade'];
$custo = $_POST['pc_valor'];
$venda = 0;
$pc_id = $_POST['pc_id'];


if(empty(verificaProdutoCooperativa($pc_id))){
    $produto = new Produto($nome_produto, $custo, $venda, $unidade, $demanda, $pc_id);
    $produto_id = insereProduto($produto);
    $url = $new_source_file;
    $imagem = new Imagem($produto_id,$url);
    insereImagem($imagem);
    header("location:adm-dashboard.php#produtos");
}else{
    mostra_alerta("Não foi possível realizar a operação. Produto já existe.","warning");
    header("location:adm-dashboard.php#prod_cooperativa");
}





