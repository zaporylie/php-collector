<?php

namespace Collector;

use Collector\Data\HeaderTrait;
use Collector\Data\RegNoTrait;

class AddInvoice extends InvoiceService implements ServiceInterface {

  const method = 'AddInvoice';

  use RegNoTrait;
  use HeaderTrait;

  protected $clientIpAddress;

  protected $currency;

  protected $customerNo;

  protected $orderNo;

  protected $orderDate;

  protected $invoiceRows;

  protected $invoiceType;

  protected $invoiceAddress;

  protected $deliveryAddress;

  /**
   * @var int
   *
   * Not used at the moment.
   */
  protected $creditTime;

  protected $activationOption;

  protected $reference;

  protected $costCenter;

  protected $gender;

  protected $invoiceDeliveryMethod;

  protected $productCode;

  protected $purchaseType;

  protected $salesPerson;

  /**
   * @var
   *
   * Contact Collector for further information how to use it.
   */
  protected $additionalInformation;

  function getMethod() {
    return self::method;
  }

}
