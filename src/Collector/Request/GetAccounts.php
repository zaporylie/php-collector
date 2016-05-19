<?php

namespace Collector\Request;

use Collector\Data\HeaderTrait;
use Collector\Data\RegNoTrait;
use Collector\InformationService;
use Collector\ServiceInterface;

/**
 * Class GetAccounts
 * @package Collector\Request
 */
class GetAccounts extends InformationService implements ServiceInterface
{
    use HeaderTrait;
    use RegNoTrait;

    const METHOD = 'GetAccounts';

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
        $results->Accounts = $results->Accounts->Account;
        return $results;
    }
}
