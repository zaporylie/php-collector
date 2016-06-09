<?php

namespace Collector;

use Collector\Data\Country;

class InvoiceTest extends Data\InvoiceTest
{
    /**
     * @var int
     */
    protected $invoiceId;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var Invoice
     */
    protected $invoiceService;

    /**
     * @var object
     */
    protected $response;

    public function setUp()
    {
        parent::setUp();
        $this->response = new \stdClass();
        $this->response->InvoiceNo = 1234;
        $this->invoiceId = 4321;
        $this->countryCode = Country::NORWAY;
        $this->client = $this->getMockBuilder('\Collector\Client')
            ->disableOriginalConstructor()
            ->getMock();
        $this->client->expects($this->any())
            ->method('call')
            ->willReturnCallback(function ($method, $data) {
                $this->response->method = $method;
                $this->response->data = $data;
                return $this->response;
            });
        $this->invoiceService = new Invoice($this->client, $this->countryCode);
    }

    public function testAddInvoice()
    {
        $this->invoiceService->addInvoice($this->invoice);
        $this->assertEquals('AddInvoice', $this->invoiceService->getLastResponse()->method);
        $this->assertSame($this->response, $this->invoiceService->getLastResponse());
    }

    public function testActivateInvoice()
    {
        $this->invoiceService->setInvoiceNo($this->invoiceId)->activateInvoice();
        $this->assertNotEmpty($this->invoiceService->getLastResponse()->data['InvoiceNo']);
        $this->assertEquals('ActivateInvoice', $this->invoiceService->getLastResponse()->method);
        $this->assertSame($this->response, $this->invoiceService->getLastResponse());
    }

    public function testAdjustInvoice()
    {
        $this->invoiceService->setInvoiceNo($this->invoiceId)->adjustInvoice('ArticleId', 'Description', 'Amount', 'Vat');
        $this->assertNotEmpty($this->invoiceService->getLastResponse()->data['InvoiceNo']);
        $this->assertEquals('AdjustInvoice', $this->invoiceService->getLastResponse()->method);
        $this->assertSame($this->response, $this->invoiceService->getLastResponse());
    }

    public function testCancelInvoice()
    {
        $this->invoiceService->setInvoiceNo($this->invoiceId)->cancelInvoice();
        $this->assertNotEmpty($this->invoiceService->getLastResponse()->data['InvoiceNo']);
        $this->assertEquals('CancelInvoice', $this->invoiceService->getLastResponse()->method);
        $this->assertSame($this->response, $this->invoiceService->getLastResponse());
    }

    public function testCreditInvoice()
    {
        $this->invoiceService->setInvoiceNo($this->invoiceId)->creditInvoice();
        $this->assertNotEmpty($this->invoiceService->getLastResponse()->data['InvoiceNo']);
        $this->assertEquals('CreditInvoice', $this->invoiceService->getLastResponse()->method);
        $this->assertSame($this->response, $this->invoiceService->getLastResponse());
    }

    public function testExtendDueDate()
    {
        $this->invoiceService->setInvoiceNo($this->invoiceId)->extendDueDate();
        $this->assertNotEmpty($this->invoiceService->getLastResponse()->data['InvoiceNo']);
        $this->assertEquals('ExtendDueDate', $this->invoiceService->getLastResponse()->method);
        $this->assertSame($this->response, $this->invoiceService->getLastResponse());
    }
}
