<?php

namespace Collector\Request;

use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class CancelInvoice.
 */
class CancelInvoice extends InvoiceService implements ServiceInterface
{
    use InvoiceTrait;

    const METHOD = 'CancelInvoice';

    public function getMethod()
    {
        return self::METHOD;
    }
}
