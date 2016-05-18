<?php

namespace Collector\Data;

use Collector\Serializer;

/**
 * Class InvoiceRow
 * @package Collector\Data
 */
class InvoiceRow extends ArticleList {

  use Serializer;

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
   * @param int $quantity
   * @param float $unitPrice
   * @param float $vat
   */
  public function __construct($articleId, $description, $quantity, $unitPrice, $vat) {
    parent::__construct($articleId, $description, $quantity);
    $this->UnitPrice = $unitPrice;
    $this->VAT = $vat;
  }

}
