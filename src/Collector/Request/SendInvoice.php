<?php

namespace Collector\Request;

use Collector\Data\HeaderTrait;
use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class SendInvoice.
 */
class SendInvoice extends InvoiceService implements ServiceInterface
{
    use HeaderTrait;
    use InvoiceTrait;

    const METHOD = 'SendInvoice';

    /**
     * @var int
     */
    protected $InvoiceDeliveryMethod;

    /**
     * @var string (optional)
     */
    protected $Email;

    /**
     * @param int $InvoiceDeliveryMethod
     */
    public function setInvoiceDeliveryMethod($InvoiceDeliveryMethod)
    {
        $this->InvoiceDeliveryMethod = $InvoiceDeliveryMethod;
    }

    /**
     * @param string $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD;
    }
}
