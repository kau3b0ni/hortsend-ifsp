<?php

 class Fornecedor {

	private $id;
	private $razaosocial;
	private $cnpj;
	private $telefone_contato;
	private $email;
	private $login;	

	function __construct($razaosocial, $cnpj, $email, $telefone_contato) {
		$this->razaosocial = $razaosocial;
		$this->cnpj = $cnpj;
		$this->email = $email;
		$this->telefone_contato = $telefone_contato;				
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {	
		$this->id = $id;
	}

	public function getRazaoSocial() {
		return $this->razaosocial;
	}

	public function setRazaoSocial($razaosocial) {
		$this->razaosocial = $razaosocial;
	}

	public function getCnpj() {
		return $this->cnpj;
	}

	public function setCnpj($cnpj) {
		$this->cnpj = $cnpj;
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