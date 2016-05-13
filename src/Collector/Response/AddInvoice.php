<?php

namespace Collector\Response;

use Collector\Data\CorrelationIdTrait;

class AddInvoice {

  use CorrelationIdTrait;

  /**
   * @var string
   */
  protected $paymentReference;

  /**
   * @var string
   */
  protected $availableReservationAmount;

  /**
   * @var float
   */
  protected $lowestAmountToPay;

  /**
   * @var float
   */
  protected $totalAmount;

  /**
   * @var string
   */
  protected $invoiceNo;

  /**
   * @var int
   */
  protected $invoiceStatus;

  /**
   * @var /DateTime
   */
  protected $dueDate;

  /**
   * @var string
   */
  protected $invoiceUrl;

}
