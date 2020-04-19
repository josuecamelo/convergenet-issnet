<?php


class Rps
{
    private $numeroRps;
    private $serieRps;
    private $tipoRps;
    private $dataEmissao;
    private $naturezaOperacao;
    private $regimeTributacao;
    private $optanteSimplesNacional;
    private $incentivadorCultural;
    private $valorServicos;
    private $valorDeducoes;
    private $valorPis;
    private $valorConfins;
    private $valorInss;
    private $valorIR;
    private $valorCsll;
    private $issRetido;
    private $valorISS;
    private $outrasRetencoes;
    private $baseCalculo;
    private $aliquota;
    private $valorLiquidoRps;
    private $descontoCondicionado;
    private $descontoIncondicionado;
    private $itemListaServicos;
    private $codigoCnae;
    private $codigoTributacaoMunicipio;
    private $municipioPrestador;
    private $inscricaoMunicipalPrestador;
    private $cpfCnpjPrestador;
    private $descricaoServico;

    /**
     * @return mixed
     */
    public function getNumeroRps()
    {
        return $this->numeroRps;
    }

    /**
     * @param mixed $numeroRps
     */
    public function setNumeroRps($numeroRps)
    {
        $this->numeroRps = $numeroRps;
    }

    /**
     * @return mixed
     */
    public function getSerieRps()
    {
        return $this->serieRps;
    }

    /**
     * @param mixed $serieRps
     */
    public function setSerieRps($serieRps)
    {
        $this->serieRps = $serieRps;
    }

    /**
     * @return mixed
     */
    public function getTipoRps()
    {
        return $this->tipoRps;
    }

    /**
     * @param mixed $tipoRps
     */
    public function setTipoRps($tipoRps)
    {
        $this->tipoRps = $tipoRps;
    }

    /**
     * @return mixed
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * @param mixed $dataEmissao
     */
    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;
    }

    /**
     * @return mixed
     */
    public function getNaturezaOperacao()
    {
        return $this->naturezaOperacao;
    }

    /**
     * @param mixed $naturezaOperacao
     */
    public function setNaturezaOperacao($naturezaOperacao)
    {
        $this->naturezaOperacao = $naturezaOperacao;
    }

    /**
     * @return mixed
     */
    public function getRegimeTributacao()
    {
        return $this->regimeTributacao;
    }

    /**
     * @param mixed $regimeTributacao
     */
    public function setRegimeTributacao($regimeTributacao)
    {
        $this->regimeTributacao = $regimeTributacao;
    }

    /**
     * @return mixed
     */
    public function getOptanteSimplesNacional()
    {
        return $this->optanteSimplesNacional;
    }

    /**
     * @param mixed $optanteSimplesNacional
     */
    public function setOptanteSimplesNacional($optanteSimplesNacional)
    {
        $this->optanteSimplesNacional = $optanteSimplesNacional;
    }

    /**
     * @return mixed
     */
    public function getIncentivadorCultural()
    {
        return $this->incentivadorCultural;
    }

    /**
     * @param mixed $incentivadorCultural
     */
    public function setIncentivadorCultural($incentivadorCultural)
    {
        $this->incentivadorCultural = $incentivadorCultural;
    }

    /**
     * @return mixed
     */
    public function getValorServicos()
    {
        return $this->valorServicos;
    }

    /**
     * @param mixed $valorServicos
     */
    public function setValorServicos($valorServicos)
    {
        $this->valorServicos = $valorServicos;
    }

    /**
     * @return mixed
     */
    public function getValorDeducoes()
    {
        return $this->valorDeducoes;
    }

    /**
     * @param mixed $valorDeducoes
     */
    public function setValorDeducoes($valorDeducoes)
    {
        $this->valorDeducoes = $valorDeducoes;
    }

    /**
     * @return mixed
     */
    public function getValorPis()
    {
        return $this->valorPis;
    }

    /**
     * @param mixed $valorPis
     */
    public function setValorPis($valorPis)
    {
        $this->valorPis = $valorPis;
    }

    /**
     * @return mixed
     */
    public function getValorConfins()
    {
        return $this->valorConfins;
    }

    /**
     * @param mixed $valorConfins
     */
    public function setValorConfins($valorConfins)
    {
        $this->valorConfins = $valorConfins;
    }

    /**
     * @return mixed
     */
    public function getValorInss()
    {
        return $this->valorInss;
    }

    /**
     * @param mixed $valorInss
     */
    public function setValorInss($valorInss)
    {
        $this->valorInss = $valorInss;
    }

    /**
     * @return mixed
     */
    public function getValorIR()
    {
        return $this->valorIR;
    }

    /**
     * @param mixed $valorIR
     */
    public function setValorIR($valorIR)
    {
        $this->valorIR = $valorIR;
    }

    /**
     * @return mixed
     */
    public function getValorCsll()
    {
        return $this->valorCsll;
    }

    /**
     * @param mixed $valorCsll
     */
    public function setValorCsll($valorCsll)
    {
        $this->valorCsll = $valorCsll;
    }

    /**
     * @return mixed
     */
    public function getIssRetido()
    {
        return $this->issRetido;
    }

    /**
     * @param mixed $issRetido
     */
    public function setIssRetido($issRetido)
    {
        $this->issRetido = $issRetido;
    }

    /**
     * @return mixed
     */
    public function getOutrasRetencoes()
    {
        return $this->outrasRetencoes;
    }

    /**
     * @param mixed $outrasRetencoes
     */
    public function setOutrasRetencoes($outrasRetencoes)
    {
        $this->outrasRetencoes = $outrasRetencoes;
    }

    /**
     * @return mixed
     */
    public function getBaseCalculo()
    {
        return $this->baseCalculo;
    }

    /**
     * @param mixed $baseCalculo
     */
    public function setBaseCalculo($baseCalculo)
    {
        $this->baseCalculo = $baseCalculo;
    }

    /**
     * @return mixed
     */
    public function getValorLiquidoRps()
    {
        return $this->valorLiquidoRps;
    }

    /**
     * @param mixed $valorLiquidoRps
     */
    public function setValorLiquidoRps($valorLiquidoRps)
    {
        $this->valorLiquidoRps = $valorLiquidoRps;
    }

    /**
     * @return mixed
     */
    public function getDescontoCondicionado()
    {
        return $this->descontoCondicionado;
    }

    /**
     * @param mixed $descontoCondicionado
     */
    public function setDescontoCondicionado($descontoCondicionado)
    {
        $this->descontoCondicionado = $descontoCondicionado;
    }

    /**
     * @return mixed
     */
    public function getDescontoIncondicionado()
    {
        return $this->descontoIncondicionado;
    }

    /**
     * @param mixed $descontoIncondicionado
     */
    public function setDescontoIncondicionado($descontoIncondicionado)
    {
        $this->descontoIncondicionado = $descontoIncondicionado;
    }

    /**
     * @return mixed
     */
    public function getItemListaServicos()
    {
        return $this->itemListaServicos;
    }

    /**
     * @param mixed $itemListaServicos
     */
    public function setItemListaServicos($itemListaServicos)
    {
        $this->itemListaServicos = $itemListaServicos;
    }

    /**
     * @return mixed
     */
    public function getAliquota()
    {
        return $this->aliquota;
    }

    /**
     * @param mixed $aliquota
     */
    public function setAliquota($aliquota)
    {
        $this->aliquota = $aliquota;
    }

    /**
     * @return mixed
     */
    public function getCodigoCnae()
    {
        return $this->codigoCnae;
    }

    /**
     * @param mixed $codigoCnae
     */
    public function setCodigoCnae($codigoCnae)
    {
        $this->codigoCnae = $codigoCnae;
    }

    /**
     * @return mixed
     */
    public function getCodigoTributacaoMunicipio()
    {
        return $this->codigoTributacaoMunicipio;
    }

    /**
     * @param mixed $codigoTributacaoMunicipio
     */
    public function setCodigoTributacaoMunicipio($codigoTributacaoMunicipio)
    {
        $this->codigoTributacaoMunicipio = $codigoTributacaoMunicipio;
    }

    /**
     * @return mixed
     */
    public function getMunicipioPrestador()
    {
        return $this->municipioPrestador;
    }

    /**
     * @param mixed $municipioPrestador
     */
    public function setMunicipioPrestador($municipioPrestador)
    {
        $this->municipioPrestador = $municipioPrestador;
    }

    /**
     * @return mixed
     */
    public function getInscricaoMunicipalPrestador()
    {
        return $this->inscricaoMunicipalPrestador;
    }

    /**
     * @param mixed $inscricaoMunicipalPrestador
     */
    public function setInscricaoMunicipalPrestador($inscricaoMunicipalPrestador)
    {
        $this->inscricaoMunicipalPrestador = $inscricaoMunicipalPrestador;
    }

    /**
     * @return mixed
     */
    public function getDescricaoServico()
    {
        return $this->descricaoServico;
    }

    /**
     * @param mixed $descricaoServico
     */
    public function setDescricaoServico($descricaoServico)
    {
        $this->descricaoServico = $descricaoServico;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpjPrestador()
    {
        return $this->cpfCnpjPrestador;
    }

    /**
     * @param mixed $cpfCnpjPrestador
     */
    public function setCpfCnpjPrestador($cpfCnpjPrestador)
    {
        $this->cpfCnpjPrestador = $cpfCnpjPrestador;
    }

    /**
     * @return mixed
     */
    public function getValorISS()
    {
        return $this->valorISS;
    }

    /**
     * @param mixed $valorISS
     */
    public function setValorISS($valorISS)
    {
        $this->valorISS = $valorISS;
    }


}