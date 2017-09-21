<?php

 class Administrador {

	private $matricula;
	private $nome;
	private $usuario_id;

	function __construct($matricula, $nome, $usuario_id) {
		$this->nome = $nome;
		$this->cnpj = $cnpj;
		$this->usuario_id = $usuario_id;						
	}

	public function getMatricula() {
		return $this->matricula;
	}

	public function setMatricula($matricula) {	
		$this->matricula = $matricula;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}
	
	public function getUsuarioId() {
		return $this->usuario_id;
	}

	public function setUsuarioId($usuario_id) {
		$this->usuario_id = $usuario_id;
	}

}

?>