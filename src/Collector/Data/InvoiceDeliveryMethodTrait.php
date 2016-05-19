<?php

namespace Collector\Data;

trait InvoiceDeliveryMethodTrait
{
    static public $InvoiceDeliveryMethodNormalMail = 1;
    static public $InvoiceDeliveryMethodEmail = 2;

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
