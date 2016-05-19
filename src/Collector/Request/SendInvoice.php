<?php

namespace Collector\Request;

use Collector\Data\InvoiceDeliveryMethodTrait;
use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class SendInvoice.
 */
class SendInvoice extends InvoiceService implements ServiceInterface
{
    use InvoiceTrait;
    use InvoiceDeliveryMethodTrait;

    const METHOD = 'SendInvoice';

    /**
     * @var string (optional)
     */
    protected $Email;

    /**
     * SendInvoice constructor.
     * @param string $countryCode
     * @param $invoiceNo
     * @param $invoiceDeliveryMethod
     * @param null $email
     */
    public function __construct($countryCode, $invoiceNo, $invoiceDeliveryMethod, $email = null)
    {
        parent::__construct($countryCode);
        $this->InvoiceNo = $invoiceNo;
        $this->InvoiceDeliveryMethod = $invoiceDeliveryMethod;
        $this->Email = $email;
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
