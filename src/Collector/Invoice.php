<?php

namespace Collector;

use Collector\Data\HeaderTrait;
use Collector\Data\InvoiceNoTrait;

/**
 * Class Invoice
 * @package Collector
 */
class Invoice implements InvoiceInterface, ServiceInterface
{

    use HeaderTrait;
    use InvoiceNoTrait;

    const WSDL = 'InvoiceServiceV32.svc';
    const SCHEMA = 'InvoiceService';

    const NORMAL_MAIL = 1;
    const EMAIL = 2;

    const STATUS_ON_HOLD = 0;
    const STATUS_PENDING = 1;
    const STATUS_ACTIVATED = 2;
    const STATUS_REJECTED = 5;
    const STATUS_SIGNING = 6;

    static public $statuses = [
        self::STATUS_ON_HOLD => 'On hold',
        self::STATUS_PENDING => 'Pending',
        self::STATUS_ACTIVATED => 'Activated',
        self::STATUS_REJECTED => 'Rejected',
        self::STATUS_SIGNING => 'Signing',
    ];

    const TYPE_DIRECT = 0;
    const TYPE_MONTHLY = 1;
    const TYPE_AGGREGATED = 3;
    const TYPE_INTEREST_FREE = 4;
    const TYPE_ANNUITY = 5;

    static public $types = [
        self::TYPE_DIRECT => 'Invoice will be in the package and/or directly sent with e-mail if InvoiceDeliveryMethod is set to 1 (normal mail), Collector will not send this invoice to the customer, you will send it as part of the package.',
        self::TYPE_MONTHLY => 'Monthly invoice. Collector will send this invoice.',
        self::TYPE_AGGREGATED => 'Aggregated invoice. Collector will send the invoice. All invoices incoming during the same month with this flag will be aggregated to one invoice.',
        self::TYPE_INTEREST_FREE => 'Interest Free Invoice. Collector will send this invoice.',
        self::TYPE_ANNUITY => 'Annuity invoice. Collector will send this invoice.',
    ];

    const ACTIVATION_MANUAL = 0;
    const ACTIVATION_AUTO = 1;
    const ACTIVATION_PRE_PAID = 2;

    static public $activation = [
        self::ACTIVATION_MANUAL => 'Purchase will be preliminary and must be activated, by using the ActivateInvoice, PartActivateInvoice or through the Collector Partner Portal.',
        self::ACTIVATION_AUTO => 'Auto activation, will automatically active the invoice so it can be sent out directly. This can only be used when the order can be delivered directly.',
        self::ACTIVATION_PRE_PAID => 'Pre-Paid invoice. The purchase will be activated first when an invoice is paid. Not used at the moment.',
    ];

    /**
     * @var \Collector\ClientInterface
     */
    protected $client;

    /**
     * @var mixed
     */
    protected $lastResponse;

    /**
     * Invoice constructor.
     * @param \Collector\ClientInterface $client
     * @param string $countryCode
     */
    public function __construct(ClientInterface $client, $countryCode)
    {
        $this->client = $client;
        $this->setCountryCode($countryCode);
    }

    /**
     * @return mixed
     */
    public function getLastResponse()
    {
        return $this->lastResponse;
    }

    public function addInvoice(\Collector\Data\Invoice $invoice)
    {
        $data = $this->getData($invoice);
        $this->call('AddInvoice', $data);
        $this->setInvoiceNo($this->getLastResponse()->InvoiceNo);
        return $this;
    }

    public function activateInvoice()
    {
        $data = $this->getData();
        $this->call('ActivateInvoice', $data);
        return $this;
    }

    public function adjustInvoice($articleId, $description, $amount, $vat)
    {
        $data = $this->getData([
            'ArticleId' => $articleId,
            'Description' => $description,
            'Amount' => $amount,
            'Vat' => $vat,
        ]);
        $this->call('AdjustInvoice', $data);
        return $this;
    }

    public function cancelInvoice()
    {
        $data = $this->getData();
        $this->call('CancelInvoice', $data);
        $this->setInvoiceNo(null);
        return $this;
    }

    public function creditInvoice(\Collector\Data\DateTime $creditDate = null)
    {
        $data = $this->getData([
            'CreditDate' => $creditDate ?: new \Collector\Data\DateTime(),
        ]);
        $this->call('CreditInvoice', $data);
        $this->setInvoiceNo(null);
        return $this;
    }

    public function extendDueDate()
    {
        $data = $this->getData();
        $this->call('ExtendDueDate', $data);
        return $this;
    }

    public function partActivateInvoice(array $articleList)
    {
        $data = $this->getData([
            'ArticleList' => $articleList,
        ]);
        $this->call('PartActivateInvoice', $data);
        $this->setInvoiceNo($this->getLastResponse()->NewInvoiceNo);
        return $this;
    }

    public function partCreditInvoice(array $articleList, \Collector\Data\DateTime $creditDate = null)
    {
        $data = $this->getData([
            'ArticleList' => $articleList,
            'CreditDate' => $creditDate ?: new \Collector\Data\DateTime(),
        ]);
        $this->call('PartCreditInvoice', $data);
        return $this;
    }

    public function replaceInvoice(array $invoiceRows)
    {
        $data = $this->getData([
            'InvoiceRows' => $invoiceRows,
        ]);
        $this->call('ReplaceInvoice', $data);
        return $this;
    }

    public function sendInvoice($invoiceDeliveryMethod, $email = null)
    {
        $data = $this->getData([
            'InvoiceDeliveryMethod' => $invoiceDeliveryMethod,
            'Email' => $email,
        ]);
        $this->call('SendInvoice', $data);
        return $this;
    }

    /**
     * @param string $method
     * @param array $data
     * @return mixed
     */
    protected function call($method, array $data = [])
    {
        $this->client->setWsdl(self::WSDL);
        $this->client->setSchema(self::SCHEMA);
        $response = $this->client->call($method, $data);
        $this->setLastResponse($response);
        return $response;
    }

    /**
     * @param mixed $lastResponse
     */
    protected function setLastResponse($lastResponse)
    {
        $this->lastResponse = $lastResponse;
    }

    /**
     * @return array
     */
    protected function getHeader()
    {
        return [
            'CountryCode' => $this->getCountryCode(),
            'CorrelationId' => $this->getCorrelationId(),
            'StoreId' => $this->getStoreId(),
            'InvoiceNo' => $this->getInvoiceNo(),
        ];
    }

    /**
     * @param array $data
     * @return array
     */
    protected function getData($data = [])
    {
        $data = json_decode(json_encode($data), true) + $this->getHeader();
        return array_filter($data);
    }
}
