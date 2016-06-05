<?php

namespace Collector\Data;

class BaseAddressTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var BaseAddress;
     */
    protected $baseAddress;

    public function setUp()
    {
        $this->baseAddress = new BaseAddress(
            'Address 1',
            'Address 2',
            'COAddress',
            'PostalCode',
            'City',
            'CountryCode'
        );
    }

    public function testAddress1()
    {
        $this->assertEquals('Address 1', $this->baseAddress->getAddress1());
    }

    public function testAddress2()
    {
        $this->assertEquals('Address 2', $this->baseAddress->getAddress2());
    }

    public function testGetCOAddress()
    {
        $this->assertEquals('COAddress', $this->baseAddress->getCOAddress());
    }

    public function testPostalCode()
    {
        $this->assertEquals('PostalCode', $this->baseAddress->getPostalCode());
    }

    public function testCity()
    {
        $this->assertEquals('City', $this->baseAddress->getCity());
    }

    public function testCountryCode()
    {
        $this->assertEquals('CountryCode', $this->baseAddress->getCountryCode());
    }
}
