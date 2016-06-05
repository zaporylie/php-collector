<?php

namespace Collector\Data;

/**
 * Class InvoiceRow.
 */
class InvoiceRow extends ArticleList
{

    /**
     * @var float
     */
    protected $UnitPrice;

    /**
     * @var float
     */
    protected $VAT;

    /**
     * InvoiceRow constructor.
     *
     * @param string $articleId
     * @param string $description
     * @param int    $quantity
     * @param float  $unitPrice
     * @param float  $vat
     */
    public function __construct($articleId, $description, $quantity, $unitPrice, $vat)
    {
        parent::__construct($articleId, $description, $quantity);
        $this->UnitPrice = $unitPrice;
        $this->VAT = $vat;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
    // Skip empty lines.
        return array_filter(get_object_vars($this));
    }

    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    public function getVAT()
    {
        return $this->VAT;
    }
}
