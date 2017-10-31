<?php
/**
 * Created by PhpStorm.
 * User: kaue
 * Date: 31/10/2017
 * Time: 02:47
 */

class Cartao {
    private $id_cartao;
    private $id_cliente;
    private $numero;
    private $nome;
    private $validade;
    private $codigo;

    /**
     * Cartao constructor.
     * @param $id_cliente
     * @param $numero
     * @param $nome
     * @param $validade
     * @param $codigo
     */
    public function __construct($id_cliente, $numero, $nome, $validade, $codigo)
    {
        $this->id_cliente = $id_cliente;
        $this->numero = $numero;
        $this->nome = $nome;
        $this->validade = $validade;
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getIdCartao()
    {
        return $this->id_cartao;
    }

    /**
     * @param mixed $id_cartao
     */
    public function setIdCartao($id_cartao)
    {
        $this->id_cartao = $id_cartao;
    }

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    /**
     * @param mixed $id_cliente
     */
    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
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
    public function getValidade()
    {
        return $this->validade;
    }

    /**
     * @param mixed $validade
     */
    public function setValidade($validade)
    {
        $this->validade = $validade;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }




}