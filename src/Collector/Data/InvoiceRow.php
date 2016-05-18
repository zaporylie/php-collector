<?php

namespace Collector\Data;
use Collector\Serializer;

/**
 * Class InvoiceRow
 * @package Collector\Data
 */
class InvoiceRow implements \JsonSerializable {

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
    $this->ArticleId = $articleId;
    $this->Description = $description;
    $this->Quantity = $quantity;
    $this->UnitPrice = $unitPrice;
    $this->VAT = $vat;
  }


}
