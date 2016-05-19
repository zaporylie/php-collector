<?php

namespace Collector\Request;

use Collector\Data\ArticleList;
use Collector\Data\CreditDateTrait;
use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class PartCreditInvoice.
 */
class PartCreditInvoice extends InvoiceService implements ServiceInterface
{
    use InvoiceTrait;
    use CreditDateTrait;

    /**
     * Collector method.
     */
    const METHOD = 'PartCreditInvoice';

    /**
     * @var ArticleList[]
     */
    protected $ArticleList;

    /**
     * PartCreditInvoice constructor.
     * @param string $countryCode
     * @param string $invoiceNo
     * @param \DateTime $creditDate
     * @param \Collector\Data\ArticleList[] $articleList
     */
    public function __construct($countryCode, $invoiceNo, \DateTime $creditDate, array $articleList)
    {
        parent::__construct($countryCode);
        $this->InvoiceNo = $invoiceNo;
        $this->CreditDate = $creditDate;
        $this->ArticleList = $articleList;
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
