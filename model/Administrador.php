<?php

 class Administrador {

	private $matricula;
	private $nome;
	private $email;

	function __construct($matricula, $nome, $email) {
		$this->nome = $nome;
		$this->cnpj = $cnpj;
		$this->email = $email;
		$this->telefone_contato = $telefone_contato;				
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
	
	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

}

?>