<?php

class Recibos
{
    private $numeroLote;
    private $cnpj;
    private $inscMunicipal;
    private $quantidadeRps;
    private $rps;
    private $tomador;

    /**
     * @return mixed
     */
    public function getNumeroLote()
    {
        return $this->numeroLote;
    }

    /**
     * @param mixed $numeroLote
     */
    public function setNumeroLote($numeroLote)
    {
        $this->numeroLote = $numeroLote;
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
    public function getInscMunicipal()
    {
        return $this->inscMunicipal;
    }

    /**
     * @param mixed $inscMunicipal
     */
    public function setInscMunicipal($inscMunicipal)
    {
        $this->inscMunicipal = $inscMunicipal;
    }

    /**
     * @return mixed
     */
    public function getQuantidadeRps()
    {
        return $this->quantidadeRps;
    }

    /**
     * @param mixed $quantidadeRps
     */
    public function setQuantidadeRps($quantidadeRps)
    {
        $this->quantidadeRps = $quantidadeRps;
    }

    /**
     * @return mixed
     */
    public function getRps()
    {
        return $this->rps;
    }

    /**
     * @param mixed $rps
     */
    public function setRps($rps)
    {
        $this->rps = $rps;
    }

    /**
     * @return mixed
     */
    public function getTomador()
    {
        return $this->tomador;
    }

    /**
     * @param mixed $tomador
     */
    public function setTomador($tomador)
    {
        $this->tomador = $tomador;
    }


}