<?php

class Imagem{

    private $id_imagem;
    private $produto_id;
    private $url;

    /**
     * Imagem constructor.
     * @param $produto_id
     * @param $url
     */
    public function __construct($produto_id, $url)
    {
        $this->produto_id = $produto_id;
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getIdImagem()
    {
        return $this->id_imagem;
    }

    /**
     * @param mixed $id_imagem
     */
    public function setIdImagem($id_imagem)
    {
        $this->id_imagem = $id_imagem;
    }

    /**
     * @return mixed
     */
    public function getProdutoId()
    {
        return $this->produto_id;
    }

    /**
     * @param mixed $produto_id
     */
    public function setProdutoId($produto_id)
    {
        $this->produto_id = $produto_id;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }




}