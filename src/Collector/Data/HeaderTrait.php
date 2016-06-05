<?php

namespace Collector\Data;

/**
 * Class HeaderTrait.
 */
trait HeaderTrait
{

    /**
     * @var int (optional)
     */
    protected $StoreId;

    /**
     * @var string
     */
    protected $CountryCode;

    /**
     * @var string
     */
    protected $correlationId;

    /**
     * @return int
     */
    public function getStoreId()
    {
        return $this->StoreId;
    }

    /**
     * @param int $StoreId
     */
    public function setStoreId($StoreId)
    {
        $this->StoreId = $StoreId;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
    }

    /**
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->correlationId;
    }

    /**
     * @param string $correlationId
     */
    public function setCorrelationId($correlationId)
    {
        $this->correlationId = $correlationId;
    }
}
