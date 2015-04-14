<?php
namespace CadastroCliente;
/**
 * Interface BillingAddress
 *
 * Interface para endereço de cobrança
 */
interface EndCobranca
{
    /**
     * Seta o endereço de cobrança
     *
     * @param string $billingAddress
     */
    public function setEndCobranca($endCobranca);
    /**
     * Retorna o endereço de cobrança
     *
     * @return string
     */
    public function getEndCobranca();
    /**
     * Verifica se tem endereço de cobrança
     *
     * @return bool
     */
    public function hasEndCobranca();
}