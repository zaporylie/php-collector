<?php

namespace Collector\Request;

use Collector\Data\HeaderTrait;
use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class ExtendDueDate.
 */
class ExtendDueDate extends InvoiceService implements ServiceInterface
{
    use HeaderTrait;
    use InvoiceTrait;

    const METHOD = 'ExtendDueDate';

    /**
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD;
    }
}
