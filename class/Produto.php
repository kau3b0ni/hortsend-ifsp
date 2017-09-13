<?php

 class Produto {

	private $id;
	private $nome;
	private $preco_custo;
	private $preco_venda;
	private $unidade;
	private $categoria;	

	function __construct($nome, $preco_custo, $preco_venda, $unidade, $categoria) {
		$this->nome = $nome;
		$this->preco_custo = $preco_custo;
		$this->preco_venda = $preco_venda;
		$this->unidade = $unidade;
		$this->categoria = $categoria;		
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

	public function getPrecoCusto() {
		return $this->preco_custo;
	}

	public function getPrecoVenda() {
		return $this->preco_venda;
	}

	public function getUnidade() {
		return $this->unidade;
	}

	public function getCategoria() {
		return $this->categoria;
	}	

	function __toString() {
		return $this->nome.": R$ ".$this->preco_venda;
	}
}

?>