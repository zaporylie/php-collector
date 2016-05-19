<?php

namespace Collector\Request;

use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class ExtendDueDate.
 */
class ExtendDueDate extends InvoiceService implements ServiceInterface
{
    use InvoiceTrait;

    const METHOD = 'ExtendDueDate';

    /**
     * CancelInvoice constructor.
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
