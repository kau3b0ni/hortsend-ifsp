<?php
require_once("controle-sessao.php");
//limpa_cesta();
//print_r($_SESSION['cesta']['indice_itens']);
sessao_inicia_cesta();
header("location: cliente-monte-sua-cesta.php");