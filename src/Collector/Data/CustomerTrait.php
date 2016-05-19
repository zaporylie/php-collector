<?php

namespace Collector\Data;

/**
 * Class CustomerTrait
 * @package Collector\Data
 */
trait CustomerTrait
{
    /**
     * @var string
     */
    protected $CustomerNo;

    /**
     * @param string $CustomerNo
     */
    public function setCustomerNo($CustomerNo)
    {
        $this->CustomerNo = $CustomerNo;
    }

    /**
     * @return string
     */
    public function getCustomerNo()
    {
        return $this->CustomerNo;
    }
}
