<?php
namespace Clientes;
use Clientes\EndCobranca;
use Clientes\Classificacao;
use Clientes\Cliente;

class ClienteJuridico extends Cliente implements EndCobranca, Classificacao
{

    protected $razaoSocial;

    protected $cnpj;

    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        
        return $this;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        
        return $this;
    }
}