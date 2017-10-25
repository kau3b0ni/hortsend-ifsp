<?php

 class Cliente
 {

     private $id;
     private $nome;
     private $cpf;
     private $telefone_contato;
     private $usuario_id;

     /**
      * Cliente constructor.
      * @param $nome
      * @param $cpf
      * @param $telefone_contato
      * @param $usuario_id
      */
     public function __construct($nome, $cpf, $telefone_contato, $usuario_id)
     {
         $this->nome = $nome;
         $this->cpf = $cpf;
         $this->telefone_contato = $telefone_contato;
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
     public function getCpf()
     {
         return $this->cpf;
     }

     /**
      * @param mixed $cpf
      */
     public function setCpf($cpf)
     {
         $this->cpf = $cpf;
     }

     /**
      * @return mixed
      */
     public function getTelefoneContato()
     {
         return $this->telefone_contato;
     }

     /**
      * @param mixed $telefone_contato
      */
     public function setTelefoneContato($telefone_contato)
     {
         $this->telefone_contato = $telefone_contato;
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


 } ?>