<?php

namespace Collector\Data;

/**
 * Class ArticleList.
 */
class ArticleList implements \JsonSerializable
{

    /**
     * @var string
     */
    protected $ArticleId;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var int
     */
    protected $Quantity;

    /**
     * InvoiceRow constructor.
     *
     * @param string $articleId
     * @param string $description
     * @param int    $quantity
     * @param float  $unitPrice
     * @param float  $vat
     */
    public function __construct($articleId, $description, $quantity)
    {
        $this->ArticleId = $articleId;
        $this->Description = $description;
        $this->Quantity = $quantity;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        // Skip empty lines.
        return array_filter(get_object_vars($this));
    }

    public function getArticleId()
    {
        return $this->ArticleId;
    }

    public function getDescription()
    {
        return $this->Description;
    }

    public function getQuantity()
    {
        return $this->Quantity;
    }
}
