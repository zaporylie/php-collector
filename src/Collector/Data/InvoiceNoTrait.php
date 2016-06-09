<?php

namespace Collector\Data;

/**
 * Class InvoiceTrait.
 */
trait InvoiceNoTrait
{
    /**
     * @var string
     */
    protected $InvoiceNo;

    /**
     * @return string
     */
    public function getInvoiceNo()
    {
        return $this->InvoiceNo;
    }

    /**
     * @param string $invoiceNo
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->InvoiceNo = $invoiceNo;
        return $this;
    }
}
