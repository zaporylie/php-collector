<?php

namespace Collector\Data;

trait InvoiceTrait {

  /**
   * @var string
   */
  protected $invoiceNo;

  /**
   * @return string
   */
  public function getInvoiceNo() {
    return $this->invoiceNo;
  }

  /**
   * @param string $invoiceNo
   */
  public function setInvoiceNo($invoiceNo) {
    $this->invoiceNo = $invoiceNo;
  }

}
