<?php

namespace Collector\Request;

use Collector\Collector;
use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class CreditInvoice.
 */
class CreditInvoice extends InvoiceService implements ServiceInterface
{
    use InvoiceTrait;

    const METHOD = 'CreditInvoice';

    /**
     * @var \DateTime
     */
    protected $CreditDate;

    /**
     * @param \DateTime $CreditDate
     */
    public function setCreditDate($CreditDate)
    {
        $this->CreditDate = $CreditDate;
    }

    /**
     * @return \DateTime
     */
    public function getCreditDate()
    {
        return $this->CreditDate->format(Collector::DATE_FORMAT);
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD;
    }
}
