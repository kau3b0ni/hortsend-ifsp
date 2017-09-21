
<?php 
require_once("cabecalho-adm.php");
require_once("controller/administradorController.php");
require_once("controller/usuarioController.php");
require_once("model/Administrador.php");
require_once("model/Usuario.php");


$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel_acesso = 1;



$usuario = new Usuario($email, $senha, $nivel_acesso);
if(insereUsuario($usuario)){
    $usuario_id = buscaUsuarioId($email);
    echo ($usuario_id);    
    $administrador = new Administrador($matricula, $nome, $usuario_id);
    insereAdministrador($administrador);
}





