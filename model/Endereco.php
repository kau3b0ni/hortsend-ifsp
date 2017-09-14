<?php

 class Endereco {

	private $id;
	private $cliente_id;
	private $rua;
    private $numero;
    private $bairro;
    private $cep;
    private $cidade;
    private $uf;     


	function __construct($cliente_id, $rua, $numero, $bairro, $cep, $cidade, $uf){		
        $this->cliente_id = $cliente_id;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cep = $cep;
        $this->cidade = $cidade;
        $this->uf = $uf;				
	}
    

    
    
	public function getClientId() {
		return $this->cliente_id;
	}

	public function setClienteId($client_id) {	
		$this->cliente_id = $cliente_id;
	}

    public function getRua(){
        return $this->rua = $rua;
    }

    public function setRua($rua){
        $this->rua = $rua;
    }

    public function getNumero(){
        return $this->numero = $numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getBairro(){
        return $this->bairro = $bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getCep(){
        return $this->cep = $cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

   
    public function getCidade(){
        return $this->cidade = $cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

      public function getUf(){
        return $this->uf = $uf;
    }

    public function setUf($uf){
        $this->uf = $uf;
    }






}

?>