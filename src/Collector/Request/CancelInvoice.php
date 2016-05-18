<?php

namespace Collector\Request;

use Collector\Data\HeaderTrait;
use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

class CancelInvoice extends InvoiceService implements ServiceInterface {

  use HeaderTrait;
  use InvoiceTrait;

  const METHOD = 'CancelInvoice';

  public function getMethod() {
    return self::METHOD;
  }

}
