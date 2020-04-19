<?php


class Tomador
{
    private $cpfCnpj;
    private $razaoSocial;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $codigoMunicipioIBGE;
    private $uf;
    private $cep;
    private $telefone;
    private $email;
    private $inscricaoMunicipalTomador;

    /**
     * @return mixed
     */
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * @param mixed $cpfCnpj
     */
    public function setCpfCnpj($cpfCnpj)
    {
        $this->cpfCnpj = $cpfCnpj;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * @param mixed $razaoSocial
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
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
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getCodigoMunicipioIBGE()
    {
        return $this->codigoMunicipioIBGE;
    }

    /**
     * @param mixed $codigoMunicipioIBGE
     */
    public function setCodigoMunicipioIBGE($codigoMunicipioIBGE)
    {
        $this->codigoMunicipioIBGE = $codigoMunicipioIBGE;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getInscricaoMunicipalTomador()
    {
        return $this->inscricaoMunicipalTomador;
    }

    /**
     * @param mixed $inscricaoMunicipalTomador
     */
    public function setInscricaoMunicipalTomador($inscricaoMunicipalTomador)
    {
        $this->inscricaoMunicipalTomador = $inscricaoMunicipalTomador;
    }


}