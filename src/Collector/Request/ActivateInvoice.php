<?php

namespace Collector\Request;

use Collector\Data\HeaderTrait;
use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class ActivateInvoice.
 */
class ActivateInvoice extends InvoiceService implements ServiceInterface
{
    use HeaderTrait;
    use InvoiceTrait;

    const METHOD = 'ActivateInvoice';

    public function getMethod()
    {
        return self::METHOD;
    }
}
