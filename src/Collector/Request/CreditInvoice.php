<?php

namespace Collector\Request;

use Collector\Data\CreditDateTrait;
use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class CreditInvoice.
 */
class CreditInvoice extends InvoiceService implements ServiceInterface
{
    use InvoiceTrait;
    use CreditDateTrait;

    const METHOD = 'CreditInvoice';

    /**
     * CancelInvoice constructor.
     * @param string $countryCode
     * @param string $invoiceNo
     * @param \DateTime $creditDate
     */
    public function __construct($countryCode, $invoiceNo, \DateTime $creditDate)
    {
        parent::__construct($countryCode);
        $this->InvoiceNo = $invoiceNo;
        $this->CreditDate = $creditDate;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD;
    }
}
