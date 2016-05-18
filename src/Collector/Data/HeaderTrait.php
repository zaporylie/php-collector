<?php

namespace Collector\Data;

/**
 * Class HeaderTrait.
 */
trait HeaderTrait
{
    use CorrelationIdTrait;

    /**
     * @var int (optional)
     */
    protected $StoreId;

    /**
     * @var string
     */
    protected $CountryCode;

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
}
