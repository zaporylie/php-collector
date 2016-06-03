<?php

namespace Collector\Data;

trait InvoiceDeliveryMethodTrait
{

    /**
     * @var int
     */
    protected $InvoiceDeliveryMethod;

    /**
     * @param int $InvoiceDeliveryMethod
     */
    public function setInvoiceDeliveryMethod($InvoiceDeliveryMethod)
    {
        $this->InvoiceDeliveryMethod = $InvoiceDeliveryMethod;
    }

    /**
     * @return int
     */
    public function getInvoiceDeliveryMethod()
    {
        return $this->InvoiceDeliveryMethod;
    }
}
