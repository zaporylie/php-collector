<?php

namespace Collector\Request;

use Collector\Data\InvoiceRow;
use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class ReplaceInvoice.
 */
class ReplaceInvoice extends InvoiceService implements ServiceInterface
{
    use InvoiceTrait;

    /**
     * Collector method.
     */
    const METHOD = 'ReplaceInvoice';

    /**
     * @var InvoiceRow[]
     */
    protected $InvoiceRows;

    /**
     * ReplaceInvoice constructor.
     * @param string $countryCode
     * @param string $invoiceNo
     * @param array $invoiceRows
     */
    public function __construct($countryCode, $invoiceNo, array $invoiceRows)
    {
        parent::__construct($countryCode);
        $this->InvoiceNo = $invoiceNo;
        $this->InvoiceRows = $invoiceRows;
    }

    /**
     * @param \Collector\Data\InvoiceRow[] $InvoiceRows
     */
    public function setInvoiceRows(array $InvoiceRows)
    {
        $this->InvoiceRows = $InvoiceRows;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD;
    }
}
