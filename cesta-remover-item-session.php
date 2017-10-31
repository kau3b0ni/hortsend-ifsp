<?php


require_once("controle-sessao.php");



sessao_remover_item($_POST['id_produto']);


header("location: cliente-finalizar-cesta-etapa-1.php");
