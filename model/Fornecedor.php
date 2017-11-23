<?php

 class Fornecedor
 {

     private $id;
     private $razao;
     private $cnpj;
     private $telefone;
     private $usuario_id;

     /**
      * Fornecedor constructor.
      * @param $razao
      * @param $cnpj
      * @param $telefone
      * @param $usuario_id
      */
     public function __construct($razao, $cnpj, $telefone, $usuario_id)
     {
         $this->razao = $razao;
         $this->cnpj = $cnpj;
         $this->telefone = $telefone;
         $this->usuario_id = $usuario_id;
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
     public function getRazao()
     {
         return $this->razao;
     }

     /**
      * @param mixed $razao
      */
     public function setRazao($razao)
     {
         $this->razao = $razao;
     }

     /**
      * @return mixed
      */
     public function getCnpj()
     {
         return $this->cnpj;
     }

     /**
      * @param mixed $cnpj
      */
     public function setCnpj($cnpj)
     {
         $this->cnpj = $cnpj;
     }

     /**
      * @return mixed
      */
     public function getTelefone()
     {
         return $this->telefone;
     }

     /**
      * @param mixed $telefone
      */
     public function setTelefone($telefone)
     {
         $this->telefone = $telefone;
     }

     /**
      * @return mixed
      */
     public function getUsuarioId()
     {
         return $this->usuario_id;
     }

     /**
      * @param mixed $usuario_id
      */
     public function setUsuarioId($usuario_id)
     {
         $this->usuario_id = $usuario_id;
     }



 }