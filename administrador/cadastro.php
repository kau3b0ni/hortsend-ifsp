<?php
require_once("../alerta-sessao.php");
?>	
<?php include("../cabecalho.php"); ?>


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
        <br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
				<h3>Cadastro de Administrador</h3>
				<br />
				<form method="post" action="adiciona-adm.php" id="formCadastrarse">					
						
						<?php include("adm-form-base.php"); ?>

					<button type="submit" class="btn btn-primary form-control">Cadastar</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

<?php include("../rodape.php"); ?>