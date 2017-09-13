<?php
require_once("cabecalho.php");
?>


	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Percentual de lucro</h3>
	    		<br />
				<form method="post" action="" id="formCadastrarse">
					<div class="form-group">
						<input type="number" step="any" class="form-control" id="percentual" name="percentual" placeholder="Digite um número decimal" required="requiored">
					</div>
					
					<button type="submit" class="btn btn-primary form-control">Definir</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>
