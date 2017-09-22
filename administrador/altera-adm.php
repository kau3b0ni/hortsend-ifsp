<?php
require_once("../controller/administradorController.php");
require_once("../model/Administrador.php");

$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$usuario_id = $_POST['usuario_id'];

$administrador = new Administrador($matricula, $nome, $usuario_id);
alteraAdministrador($administrador);

?>
