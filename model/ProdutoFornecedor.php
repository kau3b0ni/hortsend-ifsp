<?php


class ProdutoFornecedor {

    private $id;
    private $id_produto_coo;
    private $id_fornecedor;
    private $quantidade_demanda;
    private $quantidade_estoque;

    /**
     * ProdutoFornecedor constructor.
     * @param $id_produto_coo
     * @param $id_fornecedor
     * @param $quantidade_demanda
     * @param $quantidade_estoque
     */
    public function __construct($id_produto_coo, $id_fornecedor, $quantidade_demanda, $quantidade_estoque)
    {
        $this->id_produto_coo = $id_produto_coo;
        $this->id_fornecedor = $id_fornecedor;
        $this->quantidade_demanda = $quantidade_demanda;
        $this->quantidade_estoque = $quantidade_estoque;
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
    public function getIdProdutoCoo()
    {
        return $this->id_produto_coo;
    }

    /**
     * @param mixed $id_produto
     */
    public function setIdProdutoCoo($id_produto_coo)
    {
        $this->id_produto_coo = $id_produto_coo;
    }

    /**
     * @return mixed
     */
    public function getIdFornecedor()
    {
        return $this->id_fornecedor;
    }

    /**
     * @param mixed $id_fornecedor
     */
    public function setIdFornecedor($id_fornecedor)
    {
        $this->id_fornecedor = $id_fornecedor;
    }

    /**
     * @return mixed
     */
    public function getQuantidadeDemanda()
    {
        return $this->quantidade_demanda;
    }

    /**
     * @param mixed $quantidade_demanda
     */
    public function setQuantidadeDemanda($quantidade_demanda)
    {
        $this->quantidade_demanda = $quantidade_demanda;
    }

    /**
     * @return mixed
     */
    public function getQuantidadeEstoque()
    {
        return $this->quantidade_estoque;
    }

    /**
     * @param mixed $quantidade_estoque
     */
    public function setQuantidadeEstoque($quantidade_estoque)
    {
        $this->quantidade_estoque = $quantidade_estoque;
    }




}