<?php

namespace Collector\Data;

class InvoiceRowTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var InvoiceRow;
     */
    protected $invoiceRow;

    public function setUp()
    {
        $this->invoiceRow = new InvoiceRow(
            'ArticleId',
            'Description',
            'Quantity',
            'UnitPrice',
            'VAT'
        );
    }

    public function testUnitPrice()
    {
        $this->assertEquals('UnitPrice', $this->invoiceRow->getUnitPrice());
    }

    public function testVAT()
    {
        $this->assertEquals('VAT', $this->invoiceRow->getVAT());
    }
}
