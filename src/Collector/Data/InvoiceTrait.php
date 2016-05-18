<?php

namespace Collector\Data;

/**
 * Class InvoiceTrait.
 */
trait InvoiceTrait
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
     * @param string $InvoiceNo
     */
    public function setInvoiceNo($InvoiceNo)
    {
        $this->InvoiceNo = $InvoiceNo;
    }
}
