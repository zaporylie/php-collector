<?php

namespace Collector\Data;

class InvoiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Invoice
     */
    protected $invoice;

    /**
     * @var DateTime
     */
    protected $dateTime;

    /**
     * @var Address
     */
    protected $address;

    /**
     * @var array
     */
    protected $invoiceRows;

    public function setUp()
    {
        $this->address = new Address(
            'FirstName',
            'LastName',
            'Address 1',
            'PostalCode',
            'City',
            'CountryCode'
        );
        $this->dateTime = new DateTime();
        $this->invoiceRows = array(
            new InvoiceRow(
                'ArticleId',
                'Description',
                'Quantity',
                'UnitPrice',
                'Vat'
            ),
        );
        $this->invoice = new Invoice(
            'RegNo',
            'Currency',
            $this->dateTime,
            $this->invoiceRows,
            $this->address,
            $this->address,
            'InvoiceDeliveryMethod'
        );
    }

    public function testClientIpAddress()
    {
        $this->invoice->setClientIpAddress('ClientIpAddress');
        $this->assertEquals('ClientIpAddress', $this->invoice->getClientIpAddress());
    }

    public function testCurrency()
    {
        $this->assertEquals('Currency', $this->invoice->getCurrency());
        $this->invoice->setCurrency('Currency2');
        $this->assertEquals('Currency2', $this->invoice->getCurrency());
    }

    public function testOrderNo()
    {
        $this->invoice->setOrderNo('OrderNo');
        $this->assertEquals('OrderNo', $this->invoice->getOrderNo());
    }

    public function testOrderDate()
    {
        $this->assertEquals($this->dateTime, $this->invoice->getOrderDate());
        $dateTime = clone $this->dateTime;
        $this->invoice->setOrderDate($dateTime);
        $this->assertSame($dateTime, $this->invoice->getOrderDate());
    }

    public function testInvoiceRows()
    {
        $this->assertEquals($this->invoiceRows, $this->invoice->getInvoiceRows());
        $this->invoice->setInvoiceRows(array());
        $this->assertEquals(array(), $this->invoice->getInvoiceRows());
    }

    public function testInvoiceType()
    {
        $this->invoice->setInvoiceType('InvoiceType');
        $this->assertEquals('InvoiceType', $this->invoice->getInvoiceType());
    }

    public function testInvoiceAddress()
    {
        $this->assertEquals($this->address, $this->invoice->getInvoiceAddress());
        $address = clone $this->address;
        $this->invoice->setInvoiceAddress($address);
        $this->assertSame($address, $this->invoice->getInvoiceAddress());
    }

    public function testDeliveryAddress()
    {
        $this->assertEquals($this->address, $this->invoice->getDeliveryAddress());
        $address = clone $this->address;
        $this->invoice->setDeliveryAddress($address);
        $this->assertSame($address, $this->invoice->getDeliveryAddress());
    }

    public function testCreditTime()
    {
        $this->invoice->setCreditTime('CreditTime');
        $this->assertEquals('CreditTime', $this->invoice->getCreditTime());
    }

    public function testActivationOption()
    {
        $this->invoice->setActivationOption('ActivationOption');
        $this->assertEquals('ActivationOption', $this->invoice->getActivationOption());
    }

    public function testReference()
    {
        $this->invoice->setReference('Reference');
        $this->assertEquals('Reference', $this->invoice->getReference());
    }

    public function testCostCenter()
    {
        $this->invoice->setCostCenter('CostCenter');
        $this->assertEquals('CostCenter', $this->invoice->getCostCenter());
    }

    public function testGender()
    {
        $this->invoice->setGender('Gender');
        $this->assertEquals('Gender', $this->invoice->getGender());
    }

    public function testProductCode()
    {
        $this->invoice->setProductCode('ProductCode');
        $this->assertEquals('ProductCode', $this->invoice->getProductCode());
    }

    public function testPurchaseType()
    {
        $this->invoice->setPurchaseType('PurchaseType');
        $this->assertEquals('PurchaseType', $this->invoice->getPurchaseType());
    }

    public function testSalesPerson()
    {
        $this->invoice->setSalesPerson('SalesPerson');
        $this->assertEquals('SalesPerson', $this->invoice->getSalesPerson());
    }

    public function testAdditionalInformation()
    {
        $this->invoice->setAdditionalInformation('AdditionalInformation');
        $this->assertEquals('AdditionalInformation', $this->invoice->getAdditionalInformation());
    }

    public function testCustomerNo()
    {
        $this->invoice->setCustomerNo('CustomerNo2');
        $this->assertEquals('CustomerNo2', $this->invoice->getCustomerNo());
    }

    public function testRegNo()
    {
        $this->assertEquals('RegNo', $this->invoice->getRegNo());
        $this->invoice->setRegNo('RegNo2');
        $this->assertEquals('RegNo2', $this->invoice->getRegNo());
    }

    public function testInvoiceDeliveryMethod()
    {
        $this->assertEquals('InvoiceDeliveryMethod', $this->invoice->getInvoiceDeliveryMethod());
        $this->invoice->setInvoiceDeliveryMethod('InvoiceDeliveryMethod2');
        $this->assertEquals('InvoiceDeliveryMethod2', $this->invoice->getInvoiceDeliveryMethod());
    }
}
