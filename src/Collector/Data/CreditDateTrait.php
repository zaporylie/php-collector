<?php

namespace Collector\Data;

use Collector\Collector;

/**
 * Class CreditDateTrait
 * @package Collector\Data
 */
trait CreditDateTrait {
    /**
     * @var \DateTime
     */
    protected $CreditDate;

    /**
     * @param \DateTime $CreditDate
     */
    public function setCreditDate($CreditDate)
    {
        $this->CreditDate = $CreditDate;
    }

    /**
     * @return \DateTime
     */
    public function getCreditDate()
    {
        return $this->CreditDate->format(Collector::DATE_FORMAT);
    }
}