<?php

require_once("controller/cooProdutoControler.php");
require_once("controller/produtoController.php");
require_once("config/conexao.php");
require_once("model/Produto.php");
require_once("controle-sessao.php");



removeProduto($_POST['produto_id']);
header("location: adm-dashboard.php#produtos");




