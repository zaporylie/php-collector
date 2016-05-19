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
