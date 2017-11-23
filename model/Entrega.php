<?php
/**
 * Created by PhpStorm.
 * User: kaue
 * Date: 31/10/2017
 * Time: 11:10
 */

class Entrega {

    private $id;
    private $id_cesta;
    private $valor;
    private $data_entrega;
    private $estado;

    /**
     * Entrega constructor.
     * @param $id_cesta
     * @param $valor
     * @param $data_entrega
     * @param $estado
     */
    public function __construct($id_cesta, $valor, $data_entrega, $estado)
    {
        $this->id_cesta = $id_cesta;
        $this->valor = $valor;
        $this->data_entrega = $data_entrega;
        $this->estado = $estado;
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
    public function getDataEntrega()
    {
        return $this->data_entrega;
    }

    /**
     * @param mixed $data_entrega
     */
    public function setDataEntrega($data_entrega)
    {
        $this->data_entrega = $data_entrega;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }




}