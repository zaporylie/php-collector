<?php

namespace Collector\Request;

use Collector\Data\ArticleList;
use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class PartActivateInvoice.
 */
class PartActivateInvoice extends InvoiceService implements ServiceInterface
{
    use InvoiceTrait;

    /**
     * Collector method.
     */
    const METHOD = 'PartActivateInvoice';

    /**
     * @var ArticleList[]
     */
    protected $ArticleList;

    /**
     * PartActivateInvoice constructor.
     * @param string $countryCode
     * @param string $invoiceNo
     * @param \Collector\Data\ArticleList[] $articleList
     */
    public function __construct($countryCode, $invoiceNo, array $articleList)
    {
        parent::__construct($countryCode);
        $this->InvoiceNo = $invoiceNo;
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
