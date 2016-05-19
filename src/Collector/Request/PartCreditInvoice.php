<?php

namespace Collector\Request;

use Collector\Collector;
use Collector\Data\ArticleList;
use Collector\Data\HeaderTrait;
use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class PartCreditInvoice.
 */
class PartCreditInvoice extends InvoiceService implements ServiceInterface
{
    use HeaderTrait;
    use InvoiceTrait;

    /**
     * Collector method.
     */
    const METHOD = 'PartCreditInvoice';

    /**
     * @var \DateTime
     */
    protected $CreditDate;

    /**
     * @var ArticleList[]
     */
    protected $ArticleList;

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
     * @param \Collector\Data\ArticleList[] $ArticleList
     */
    public function setArticleList(array $ArticleList)
    {
        $this->ArticleList = $ArticleList;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD;
    }
}
