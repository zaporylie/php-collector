<?php

namespace Collector\Data;

use Collector\Serializer;

/**
 * Class AddInvoice.
 */
class Invoice implements \JsonSerializable
{
    use RegNoTrait;
    use InvoiceDeliveryMethodTrait;
    use CustomerTrait;
    use Serializer;

    /**
     * @var string (optional)
     */
    protected $ClientIpAddress;

    /**
     * @var string
     */
    protected $Currency;

    /**
     * @var string (optional)
     */
    protected $OrderNo;

    /**
     * @var \Collector\Data\DateTime
     */
    protected $OrderDate;

    /**
     * @var \Collector\Data\InvoiceRow[]
     */
    protected $InvoiceRows;

    /**
     * @var int (optional)
     */
    protected $InvoiceType;

    /**
     * @var \Collector\Data\Address
     */
    protected $InvoiceAddress;

    /**
     * @var \Collector\Data\Address
     */
    protected $DeliveryAddress;

    /**
     * @var int (optional)
     *
     * Not used at the moment.
     */
    protected $CreditTime;

    /**
     * @var int (optional)
     */
    protected $ActivationOption;

    /**
     * @var string (optional)
     */
    protected $Reference;

    /**
     * @var string (optional)
     */
    protected $CostCenter;

    /**
     * @var int (optional)
     */
    protected $Gender;

    /**
     * @var string (optional)
     */
    protected $ProductCode;

    /**
     * @var int (optional)
     */
    protected $PurchaseType;

    /**
     * @var string (optional)
     */
    protected $SalesPerson;

    /**
     * @var (optional)
     *
     * Contact Collector for further information how to use it.
     */
    protected $AdditionalInformation;

    /**
     * AddInvoice constructor.
     * @param string $regNo
     * @param string $currency
     * @param \Collector\Data\DateTime $orderDate
     * @param \Collector\Data\InvoiceRow[] $invoiceRows
     * @param \Collector\Data\Address $invoiceAddress
     * @param \Collector\Data\Address $deliveryAddress
     * @param int $invoiceDeliveryMethod
     */
    public function __construct(
        $regNo,
        $currency,
        \Collector\Data\DateTime $orderDate,
        array $invoiceRows,
        \Collector\Data\Address $invoiceAddress,
        \Collector\Data\Address $deliveryAddress,
        $invoiceDeliveryMethod
    ) {
        $this->RegNo = $regNo;
        $this->Currency = $currency;
        $this->OrderDate = $orderDate;
        $this->InvoiceRows = $invoiceRows;
        $this->InvoiceAddress = $invoiceAddress;
        $this->DeliveryAddress = $deliveryAddress;
        $this->InvoiceDeliveryMethod = $invoiceDeliveryMethod;
    }

    /**
     * @param string $ClientIpAddress
     */
    public function setClientIpAddress($ClientIpAddress)
    {
        $this->ClientIpAddress = $ClientIpAddress;
    }

    /**
     * @param string $Currency
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;
    }

    /**
     * @param string $OrderNo
     */
    public function setOrderNo($OrderNo)
    {
        $this->OrderNo = $OrderNo;
    }

    /**
     * @param \Collector\Data\DateTime $OrderDate
     */
    public function setOrderDate(\Collector\Data\DateTime $OrderDate)
    {
        $this->OrderDate = $OrderDate;
    }

    /**
     * @param \Collector\Data\InvoiceRow[] $InvoiceRows
     */
    public function setInvoiceRows(array $InvoiceRows)
    {
        $this->InvoiceRows = $InvoiceRows;
    }

    /**
     * @param int $InvoiceType
     */
    public function setInvoiceType($InvoiceType)
    {
        $this->InvoiceType = $InvoiceType;
    }

    /**
     * @param \Collector\Data\Address $InvoiceAddress
     */
    public function setInvoiceAddress(\Collector\Data\Address $InvoiceAddress)
    {
        $this->InvoiceAddress = $InvoiceAddress;
    }

    /**
     * @param \Collector\Data\Address $DeliveryAddress
     */
    public function setDeliveryAddress(\Collector\Data\Address $DeliveryAddress)
    {
        $this->DeliveryAddress = $DeliveryAddress;
    }

    /**
     * @param int $CreditTime
     */
    public function setCreditTime($CreditTime)
    {
        $this->CreditTime = $CreditTime;
    }

    /**
     * @param int $ActivationOption
     */
    public function setActivationOption($ActivationOption)
    {
        $this->ActivationOption = $ActivationOption;
    }

    /**
     * @param string $Reference
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
    }

    /**
     * @param string $CostCenter
     */
    public function setCostCenter($CostCenter)
    {
        $this->CostCenter = $CostCenter;
    }

    /**
     * @param int $Gender
     */
    public function setGender($Gender)
    {
        $this->Gender = $Gender;
    }

    /**
     * @param string $ProductCode
     */
    public function setProductCode($ProductCode)
    {
        $this->ProductCode = $ProductCode;
    }

    /**
     * @param int $PurchaseType
     */
    public function setPurchaseType($PurchaseType)
    {
        $this->PurchaseType = $PurchaseType;
    }

    /**
     * @param string $SalesPerson
     */
    public function setSalesPerson($SalesPerson)
    {
        $this->SalesPerson = $SalesPerson;
    }

    /**
     * @param mixed $AdditionalInformation
     */
    public function setAdditionalInformation($AdditionalInformation)
    {
        $this->AdditionalInformation = $AdditionalInformation;
    }
}
