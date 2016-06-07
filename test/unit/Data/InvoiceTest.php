<?php

namespace Collector\Data;

class InvoiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Invoice
     */
    protected $invoice;
    protected $dateTime;
    protected $address;

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
        $this->invoice = new Invoice(
            'RegNo',
            'Currency',
            $this->dateTime,
            array(),
            $this->address,
            $this->address,
            'InvoiceDeliveryMethod'
        );
        $this->invoice->setCustomerNo('CustomerNo');
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
        $this->invoice->setInvoiceDeliveryMethod('InvoiceDeliveryMethod');
        $this->assertEquals('InvoiceDeliveryMethod', $this->invoice->getInvoiceDeliveryMethod());
    }

    public function testCustomerNo()
    {
        $this->assertEquals('CustomerNo', $this->invoice->getCustomerNo());
    }
}
