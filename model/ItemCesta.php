<?php
/**
 * Created by PhpStorm.
 * User: kaue
 * Date: 31/10/2017
 * Time: 01:42
 */

class ItemCesta
{

    private $id_item_cesta;
    private $id_cesta;
    private $id_produto;
    private $valor;
    private $quantidade;
    private $nome;

    /**
     * ItemCesta constructor.
     * @param $id_cesta
     * @param $id_produto
     * @param $valor
     * @param $quantidade
     * @param $nome
     */
    public function __construct($id_cesta, $id_produto, $valor, $quantidade, $nome)
    {
        $this->id_cesta = $id_cesta;
        $this->id_produto = $id_produto;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getIdItemCesta()
    {
        return $this->id_item_cesta;
    }

    /**
     * @param mixed $id_item_cesta
     */
    public function setIdItemCesta($id_item_cesta)
    {
        $this->id_item_cesta = $id_item_cesta;
    }

    /**
     * @return mixed
     */
    public function getIdCesta()
    {
        return $this->id_cesta;
    }

    /**
     * @param mixed $id_cesta
     */
    public function setIdCesta($id_cesta)
    {
        $this->id_cesta = $id_cesta;
    }

    /**
     * @return mixed
     */
    public function getIdProduto()
    {
        return $this->id_produto;
    }

    /**
     * @param mixed $id_produto
     */
    public function setIdProduto($id_produto)
    {
        $this->id_produto = $id_produto;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
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



}

