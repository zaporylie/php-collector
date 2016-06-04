<?php

namespace Collector\Data;

/**
 * Class BaseAddress.
 */
class BaseAddress implements \JsonSerializable
{
    use SerializerTrait;

    /**
     * @var string
     */
    protected $Address1;

    /**
     * @var string
     */
    protected $Address2;

    /**
     * @var string
     */
    protected $COAddress;

    /**
     * @var string
     */
    protected $PostalCode;

    /**
     * @var string
     */
    protected $City;

    /**
     * @var string
     */
    protected $CountryCode;
    
    /**
     * BaseAddress constructor.
     * @param $address1
     * @param $address2
     * @param $cOAddress
     * @param $postalCode
     * @param $city
     * @param $countryCode
     */
    public function __construct(
        $address1,
        $address2,
        $cOAddress,
        $postalCode,
        $city,
        $countryCode
    ) {
        $this->Address1 = $address1;
        $this->Address2 = $address2;
        $this->COAddress = $cOAddress;
        $this->PostalCode = $postalCode;
        $this->City = $city;
        $this->CountryCode = $countryCode;
    }

    public function getAddress1()
    {
        return $this->Address1;
    }

    public function getAddress2()
    {
        return $this->Address2;
    }

    public function getCity()
    {
        return $this->City;
    }

    public function getCOAddress()
    {
        return $this->COAddress;
    }

    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    public function getPostalCode()
    {
        return $this->PostalCode;
    }
}
