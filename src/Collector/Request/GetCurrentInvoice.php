<?php

namespace Collector\Request;

use Collector\Data\InvoiceTrait;
use Collector\InformationService;
use Collector\ServiceInterface;

/**
 * Class GetCurrentInvoice
 * @package Collector\Request
 */
class GetCurrentInvoice extends InformationService implements ServiceInterface
{
    use InvoiceTrait;

    const METHOD = 'GetCurrentInvoice';

    /**
     * @var string
     */
    protected $PaymentReference;

    /**
     * @param string $PaymentReference
     */
    public function setPaymentReference($PaymentReference)
    {
        $this->PaymentReference = $PaymentReference;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD;
    }
}
