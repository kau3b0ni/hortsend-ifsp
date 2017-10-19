<?php
require_once("../cabecalho-adm.php");
require_once("../alerta-sessao.php");
?>


		<div id="main" class="container-fluid" style="margin-top: 50px">

			<!-- #alerta da operação -->
			<?php
				if (isset($_SESSION["mensagem"])) {
			?>
			<div class="alert alert-<?= $_SESSION["tipo"] ?>">
				<strong><?= $_SESSION["mensagem"] ?></strong>
			</div>
			<?php
			}
				limpa_alerta();
			?>

		</div>	


	   
		
<?php
require_once("../rodape.php");
?>
