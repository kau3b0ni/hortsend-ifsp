<?php
require_once("conecta.php");
require_once("model/Administrador.php");

function insereAdministrador($conexao, Administrador $administrador) {

	$query = "insert into administrador (matricula, nome, email) 
		values ('{$administrador->getMatricula()}', '{$administrador->getNome()}', '{$administrador->getEmail()}')";

	return mysqli_query($conexao, $query);
}

?>