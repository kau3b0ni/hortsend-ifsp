
<?php 
require_once("../controller/admController.php");
require_once("../controller/usuarioController.php");
require_once("../model/Administrador.php");
require_once("../model/Usuario.php");

$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel_acesso = 1;

$usuario = new Usuario($email, $senha, $nivel_acesso);
//$result = insereUsuario($usuario);
//$usuario_id = buscaUsuarioId($email);
if(insereUsuario($usuario)==1){
    $usuario_id = buscaUsuarioId($email);
    $administrador = new Administrador($matricula, $nome, $usuario_id);
    insereAdm($administrador);
    mostra_alerta("O administrador cadastrado","warning");
    header('location:painel.php');
}else {
    header('location:cliente-cadastro.php');
}
//mostra_alerta($result,"success");
//header('location:painel.php');
//var_dump($result);






