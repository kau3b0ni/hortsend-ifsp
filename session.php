<?php
require_once "controller/enderecoController.php";
require_once "controle-sessao.php";
require_once "config/conexao.php";

print_r($_SESSION['itens'][0]);
echo "<br>";
print_r($_SESSION['cesta']);
echo "<br>";
print_r($_SESSION['usuario_logado']);

echo "<br>";
$enderecos = buscaEnderecoCliente($_SESSION['usuario_logado']['usuario_id']);
print_r($enderecos);