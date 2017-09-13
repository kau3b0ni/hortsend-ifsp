<?php

 class Produto {

	private $id;
	private $nome;
	private $preco_custo;
	private $preco_venda;
	private $unidade;
	private $demanda;	

	function __construct($nome, $preco_custo, $preco_venda, $unidade) {
		$this->nome = $nome;
		$this->preco_custo = $preco_custo;
		$this->preco_venda = $preco_venda;
		$this->unidade = $unidade;
				
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


	public function getPrecoCusto() {
		return $this->preco_custo;
	}

	public function setPrecoCusto($preco_custo) {
		$this->preco_custo = $preco_custo;
	}

	public function getPrecoVenda() {
		return $this->preco_venda;
	}

	public function setPrecoVenda($preco_venda) {
		$this->preco_venda= $preco_venda;
	}


	public function getUnidade() {
		return $this->unidade;
	}

	public function setUnidade($unidade) {
		$this->unidade = $unidade;
	}

	public function getDemanda() {
		return $this->demanda;
	}

	public function setDemanda($demanda) {
		return $this->demanda;
	}		

	function __toString() {
		return $this->nome.": R$ ".$this->preco_venda;
	}
}

?>