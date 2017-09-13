<?php

 class Cliente {

	private $id;
	private $nome;
	private $cpf;
	private $telefone_contato;
	private $email;
	private $login;	

	function __construct($nome, $cpf, $email, $telefone_contato) {
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->email = $email;
		$this->telefone_contato = $telefone_contato;				
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {	
		$this->id = $id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getCpf() {
		return $this->cpf;
	}

	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}

	public function getTelefoneContato() {
		return $this->telefone_contato;
	}

	public function setTelefoneContato($telefone_contato) {
		$this->telefone_contato= $telefone_contato;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

}

?>