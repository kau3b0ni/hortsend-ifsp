<?php
/**
 * Created by PhpStorm.
 * User: kaue
 * Date: 31/10/2017
 * Time: 18:53
 */
require_once "model/Percentual.php";
require_once "controller/percentualController.php";
require_once "config/conexao.php";
require_once "controle-sessao.php";


$percentual_old = verPercentual()->percentual_lucro;
$data = date("d/m/Y");
$matricula = $_SESSION['usuario_logado']['matricula'];
$percentual_auditoria = new Percentual($percentual_old,$data,$matricula);
print_r($percentual_auditoria);
//inserePercentualAuditoria($percentual_auditoria);
inserePercentual($_POST['percentual']);
header("location:adm-dashboard.php");
