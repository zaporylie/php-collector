<?php

namespace Collector\Request;

use Collector\Data\HeaderTrait;
use Collector\Data\InvoiceRow;
use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

class ReplaceInvoice extends InvoiceService implements ServiceInterface {

  use HeaderTrait;
  use InvoiceTrait;

  /**
   * Collector method.
   */
  const METHOD = 'ReplaceInvoice';

  /**
   * @var InvoiceRow[]
   */
  protected $InvoiceRows;

  /**
   * @param \Collector\Data\InvoiceRow[] $InvoiceRows
   */
  public function setInvoiceRows(array $InvoiceRows) {
    $this->InvoiceRows = $InvoiceRows;
  }

  /**
   * @return string
   */
  public function getMethod() {
    return self::METHOD;
  }

}
