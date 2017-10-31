
<?php
/**
 * Created by PhpStorm.
 * User: kaue
 * Date: 31/10/2017
 * Time: 01:21
 */

class Cesta {
    private $id_cesta;
    private $id_cliente;
    private $data_inicial;
    private $periodo;
    private $endereco_id;
    private $valor_produtos;
    private $valor_entrega;
    private $valor_total;

    /**
     * Cesta constructor.
     * @param $id_cliente
     * @param $data_inicial
     * @param $periodo
     * @param $endereco_id
     * @param $valor_produtos
     * @param $valor_entrega
     * @param $valor_total
     */
    public function __construct($id_cliente, $data_inicial, $periodo, $endereco_id, $valor_produtos, $valor_entrega, $valor_total)
    {
        $this->id_cliente = $id_cliente;
        $this->data_inicial = $data_inicial;
        $this->periodo = $periodo;
        $this->endereco_id = $endereco_id;
        $this->valor_produtos = $valor_produtos;
        $this->valor_entrega = $valor_entrega;
        $this->valor_total = $valor_total;
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
    public function getDataInicial()
    {
        return $this->data_inicial;
    }

    /**
     * @param mixed $data_inicial
     */
    public function setDataInicial($data_inicial)
    {
        $this->data_inicial = $data_inicial;
    }

    /**
     * @return mixed
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * @param mixed $periodo
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;
    }

    /**
     * @return mixed
     */
    public function getEnderecoId()
    {
        return $this->endereco_id;
    }

    /**
     * @param mixed $endereco_id
     */
    public function setEnderecoId($endereco_id)
    {
        $this->endereco_id = $endereco_id;
    }

    /**
     * @return mixed
     */
    public function getValorProdutos()
    {
        return $this->valor_produtos;
    }

    /**
     * @param mixed $valor_produtos
     */
    public function setValorProdutos($valor_produtos)
    {
        $this->valor_produtos = $valor_produtos;
    }

    /**
     * @return mixed
     */
    public function getValorEntrega()
    {
        return $this->valor_entrega;
    }

    /**
     * @param mixed $valor_entrega
     */
    public function setValorEntrega($valor_entrega)
    {
        $this->valor_entrega = $valor_entrega;
    }

    /**
     * @return mixed
     */
    public function getValorTotal()
    {
        return $this->valor_total;
    }

    /**
     * @param mixed $valor_total
     */
    public function setValorTotal($valor_total)
    {
        $this->valor_total = $valor_total;
    }




}