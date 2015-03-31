<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 30/03/2015
 * Time: 15:34
 */

class ClienteJuridico  extends Cliente
{
    public $cnpj;
    public $enderecoCobranca;

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
    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    /**
     * @param mixed $enderecoCobranca
     */
    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
    }

}