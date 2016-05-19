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
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD;
    }
}
