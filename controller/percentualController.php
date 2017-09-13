<?php
require_once("conecta.php");
require_once("model/Percentual.php");

function definePercentual($conexao, Percentual $percentual) {

	$query = "insert into Percentual (percentual_lucro, data_modificacao, administrador_matricula) 
		values ('{$percentual->getPercentualLucro()}', '{$percentual->getDataModificacao()}','{$percentual->getAdministradorMatricula()}')";

	return mysqli_query($conexao, $query);
}
