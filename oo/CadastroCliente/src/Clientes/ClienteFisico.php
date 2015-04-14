<?php
namespace Clientes;
use Clientes\EndCobranca;
use Clientes\Classificacao;
use Clientes\Cliente;

class ClienteFisico extends Cliente implements EndCobranca, Classificacao
{

    protected $cpf;

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        
        return $this;
    }
}