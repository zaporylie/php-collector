<?php

namespace Collector\Request;

use Collector\Data\HeaderTrait;
use Collector\Data\InvoiceTrait;
use Collector\Data\RegNoTrait;
use Collector\InformationService;
use Collector\ServiceInterface;

/**
 * Class GetAccountTransactions
 * @package Collector\Request
 */
class GetAccountTransactions extends InformationService implements ServiceInterface
{
    use HeaderTrait;
    use InvoiceTrait;

    const METHOD = 'GetAccountTransactions';

    /**
     * @var string
     */
    protected $PaymentReference;

    /**
     * @param string $PaymentReference
     */
    public function setPaymentReference($PaymentReference)
    {
        $this->PaymentReference = $PaymentReference;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD;
    }

    /**
     * @param $results
     * @return mixed
     */
    public function parseResults($results)
    {
        $results->Transactions = $results->Transactions->Transaction;
        return $results;
    }
}
