<?php

namespace Collector;

/**
 * Interface InformationInterface
 * @package Collector
 */
interface InformationInterface
{

    public function getAccounts($key, $value);

    public function getAccountTransactions($key, $value);

    public function getCurrentInvoice($key, $value);
}
