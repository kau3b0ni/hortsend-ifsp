<?php

 class Administrador
 {

     private $matricula;
     private $nome;
     private $usuario_id;

     /**
      * Administrador constructor.
      * @param $nome
      * @param $usuario_id
      */
     public function __construct($nome, $usuario_id)
     {
         $this->nome = $nome;
         $this->usuario_id = $usuario_id;
     }

     /**
      * @return mixed
      */
     public function getMatricula()
     {
         return $this->matricula;
     }

     /**
      * @param mixed $matricula
      */
     public function setMatricula($matricula)
     {
         $this->matricula = $matricula;
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
?>