<?php

 class Percentual {

	private $percentual_lucro;
	private $data_modificacao;
	private $administrador_matricula;


	function __construct($percentual_lucro, $administrador_matricula) {
		$this->percentual_lucro = $percentual_lucro;
		
		$this->data_modificacao = date('Y-m-d H:i:s');	
		$this->administrador_matricula = $administrador_matricula;		
	}

	public function getPercentualLucro() {
		return $this->percentual_lucro;
	}

	public function setPercentualLucro($percentual_lucro) {	
		$this->percentual_lucro = $percentual_lucro;
	}

	public function getDataModificacao() {
		return $this->data_modificacao;
	}

	public function setDataModificacao($data_modificacao) {
		$this->data_modificacao = $data_modificacao;
	}

	public function getAdministradorMatricula() {
		return $this->administrador_matricula;
	}

	public function setAdministradorMatricula($administrador_matricula) {
		$this->administrador_matricula = $administrador_matricula;
	}

}

?>