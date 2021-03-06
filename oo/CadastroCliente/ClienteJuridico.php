<?php
namespace CadastroCliente;
use CadastroCliente\EndCobranca;
use CadastroCliente\Classificacao;
use CadastroCliente\Clientes;
/**
 * Class PJ
 *
 * Pessoa Juridica
 */
class ClienteJuridico extends Clientes implements EndCobranca, Classificacao
{
    /**
     * Razão Social
     *
     * @var string
     */
    protected $razaoSocial;
    /**
     * CNPJ
     *
     * @var string
     */
    protected $cnpj;
    /**
     * Retorna a Razão Social
     *
     * @return string
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }
    /**
     * Retorna o CNPJ
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }
    /**
     * Seta a Razão Social
     *
     * @param string $razaoSocial
     * @return \PJ Pessoa Jurídica
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }
    /**
     * Seta o CNPJ
     *
     * @param string $cnpj
     * @return \PJ Pessoa Jurídica
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}