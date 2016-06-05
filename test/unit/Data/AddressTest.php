<?php

namespace Collector\Data;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Address;
     */
    protected $address;

    public function setUp()
    {
        $this->address = new Address(
            'FirstName',
            'LastName',
            'Address 1',
            'PostalCode',
            'City',
            'CountryCode',
            'CompanyName',
            'Address 2',
            'COAddress',
            'PhoneNumber',
            'CellPhoneNumber',
            'Email'
        );
    }

    public function testFirstName()
    {
        $this->assertEquals('FirstName', $this->address->getFirstName());
    }

    public function testLastName()
    {
        $this->assertEquals('LastName', $this->address->getLastName());
    }

    public function testCompanyName()
    {
        $this->assertEquals('CompanyName', $this->address->getCompanyName());
    }

    public function testPhoneNumber()
    {
        $this->assertEquals('PhoneNumber', $this->address->getPhoneNumber());
    }

    public function testCellPhoneNumber()
    {
        $this->assertEquals('CellPhoneNumber', $this->address->getCellPhoneNumber());
    }

    public function testEmail()
    {
        $this->assertEquals('Email', $this->address->getEmail());
    }
}
