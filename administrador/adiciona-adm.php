
<?php 
require_once("../controller/administradorController.php");
require_once("../controller/usuarioController.php");
require_once("../model/Administrador.php");
require_once("../model/Usuario.php");

$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel_acesso = 1;

$usuario = new Usuario($email, $senha, $nivel_acesso);
insereUsuario($usuario);
$usuario_id = buscaUsuarioId($email);        
$administrador = new Administrador($matricula, $nome, $usuario_id);
insereAdministrador($administrador);
var_dump($administrador);






