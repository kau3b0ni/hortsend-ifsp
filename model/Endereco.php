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

     /**
      * Endereco constructor.
      * @param $cliente_id
      * @param $rua
      * @param $numero
      * @param $bairro
      * @param $cep
      * @param $cidade
      * @param $uf
      */
     public function __construct($cliente_id, $rua, $numero, $bairro, $cep, $cidade, $uf)
     {
         $this->cliente_id = $cliente_id;
         $this->rua = $rua;
         $this->numero = $numero;
         $this->bairro = $bairro;
         $this->cep = $cep;
         $this->cidade = $cidade;
         $this->uf = $uf;
     }

     /**
      * @return mixed
      */
     public function getId()
     {
         return $this->id;
     }

     /**
      * @param mixed $id
      */
     public function setId($id)
     {
         $this->id = $id;
     }

     /**
      * @return mixed
      */
     public function getClienteId()
     {
         return $this->cliente_id;
     }

     /**
      * @param mixed $cliente_id
      */
     public function setClienteId($cliente_id)
     {
         $this->cliente_id = $cliente_id;
     }

     /**
      * @return mixed
      */
     public function getRua()
     {
         return $this->rua;
     }

     /**
      * @param mixed $rua
      */
     public function setRua($rua)
     {
         $this->rua = $rua;
     }

     /**
      * @return mixed
      */
     public function getNumero()
     {
         return $this->numero;
     }

     /**
      * @param mixed $numero
      */
     public function setNumero($numero)
     {
         $this->numero = $numero;
     }

     /**
      * @return mixed
      */
     public function getBairro()
     {
         return $this->bairro;
     }

     /**
      * @param mixed $bairro
      */
     public function setBairro($bairro)
     {
         $this->bairro = $bairro;
     }

     /**
      * @return mixed
      */
     public function getCep()
     {
         return $this->cep;
     }

     /**
      * @param mixed $cep
      */
     public function setCep($cep)
     {
         $this->cep = $cep;
     }

     /**
      * @return mixed
      */
     public function getCidade()
     {
         return $this->cidade;
     }

     /**
      * @param mixed $cidade
      */
     public function setCidade($cidade)
     {
         $this->cidade = $cidade;
     }

     /**
      * @return mixed
      */
     public function getUf()
     {
         return $this->uf;
     }

     /**
      * @param mixed $uf
      */
     public function setUf($uf)
     {
         $this->uf = $uf;
     }




 }

?>