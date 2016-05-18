<?php

namespace Collector\Data;

use Collector\Serializer;

/**
 * Class ArticleList
 * @package Collector\Data
 */
class ArticleList implements \JsonSerializable {

  use Serializer;

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
   * @param int $quantity
   * @param float $unitPrice
   * @param float $vat
   */
  public function __construct($articleId, $description, $quantity) {
    $this->ArticleId = $articleId;
    $this->Description = $description;
    $this->Quantity = $quantity;
  }

}