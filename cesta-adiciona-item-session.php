<?php


    require_once("controle-sessao.php");

    $itens = $_POST;
    $item['id_produto'] = $_POST['id_produto'];
    $item['quantidade'] = $_POST['quantidade'];


    sessao_adicionar_item($item);



   header("location: cliente-monte-sua-cesta.php");
