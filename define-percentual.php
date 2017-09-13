<?php 
require_once("cabecalhoAdministrador.php");
require_once("controller/percentualController.php");
require_once("controller/percentualController.php");
require_once("model/Percentual.php");


$percentual_lucro = $_POST['percentual'];

$percentual = new Percentual($percentual_lucro, $_SESSION['matricula']);




if(definePercentual($conexao, $percentual)) { ?>
	
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">DEU RUIM</p>
<?php
}



//header("location:paginaAdministrador.php?");
?>


<?php include("rodape.php"); ?>