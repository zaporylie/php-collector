<?php

namespace Collector\Request;

use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class ActivateInvoice.
 */
class ActivateInvoice extends InvoiceService implements ServiceInterface
{
    use InvoiceTrait;

    const METHOD = 'ActivateInvoice';

    /**
     * ActivateInvoice constructor.
     * @param string $countryCode
     * @param string $invoiceNo
     */
    public function __construct($countryCode, $invoiceNo)
    {
        parent::__construct($countryCode);
        $this->InvoiceNo = $invoiceNo;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD;
    }
}
