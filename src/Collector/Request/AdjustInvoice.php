<?php

namespace Collector\Request;

use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

/**
 * Class AdjustInvoice.
 */
class AdjustInvoice extends InvoiceService implements ServiceInterface
{
    use InvoiceTrait;

    const METHOD = 'AdjustInvoice';

    /**
     * @var string
     */
    protected $ArticleId;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var float
     */
    protected $Amount;

    /**
     * @var float
     */
    protected $Vat;

    /**
     * AdjustInvoice constructor.
     * @param string $countryCode
     * @param string $invoiceNo
     * @param string $articleId
     * @param string $description
     * @param float $amount
     * @param float $vat
     */
    public function __construct($countryCode, $invoiceNo, $articleId, $description, $amount, $vat)
    {
        parent::__construct($countryCode);
        $this->InvoiceNo = $invoiceNo;
        $this->ArticleId = $articleId;
        $this->Description = $description;
        $this->Amount = $amount;
        $this->Vat = $vat;
    }

    /**
     * @param string $ArticleId
     */
    public function setArticleId($ArticleId)
    {
        $this->ArticleId = $ArticleId;
    }

    /**
     * @param string $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @param float $Amount
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
    }

    /**
     * @param float $Vat
     */
    public function setVat($Vat)
    {
        $this->Vat = $Vat;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD;
    }
}
