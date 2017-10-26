<?php

 class Produto
 {

     private $id;
     private $nome;
     private $preco_custo;
     private $preco_venda;
     private $unidade;
     private $demanda;
     private $pc_id;

     /**
      * Produto constructor.
      * @param $nome
      * @param $preco_custo
      * @param $preco_venda
      * @param $unidade
      * @param $demanda
      * @param $pc_id
      */
     public function __construct($nome, $preco_custo, $preco_venda, $unidade, $demanda, $pc_id)
     {
         $this->nome = $nome;
         $this->preco_custo = $preco_custo;
         $this->preco_venda = $preco_venda;
         $this->unidade = $unidade;
         $this->demanda = $demanda;
         $this->pc_id = $pc_id;
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
     public function getNome()
     {
         return $this->nome;
     }

     /**
      * @param mixed $nome
      */
     public function setNome($nome)
     {
         $this->nome = $nome;
     }

     /**
      * @return mixed
      */
     public function getPrecoCusto()
     {
         return $this->preco_custo;
     }

     /**
      * @param mixed $preco_custo
      */
     public function setPrecoCusto($preco_custo)
     {
         $this->preco_custo = $preco_custo;
     }

     /**
      * @return mixed
      */
     public function getPrecoVenda()
     {
         return $this->preco_venda;
     }

     /**
      * @param mixed $preco_venda
      */
     public function setPrecoVenda($preco_venda)
     {
         $this->preco_venda = $preco_venda;
     }

     /**
      * @return mixed
      */
     public function getUnidade()
     {
         return $this->unidade;
     }

     /**
      * @param mixed $unidade
      */
     public function setUnidade($unidade)
     {
         $this->unidade = $unidade;
     }

     /**
      * @return mixed
      */
     public function getDemanda()
     {
         return $this->demanda;
     }

     /**
      * @param mixed $demanda
      */
     public function setDemanda($demanda)
     {
         $this->demanda = $demanda;
     }

     /**
      * @return mixed
      */
     public function getPcId()
     {
         return $this->pc_id;
     }

     /**
      * @param mixed $pc_id
      */
     public function setPcId($pc_id)
     {
         $this->pc_id = $pc_id;
     }


 }