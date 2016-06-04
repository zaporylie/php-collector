<?php

namespace Collector\Data;

/**
 * Class Address.
 */
class Address extends BaseAddress
{
    /**
     * @var string
     */
    protected $Firstname;

    /**
     * @var string
     */
    protected $Lastname;

    /**
     * @var string
     */
    protected $Companyname;

    /**
     * @var string
     */
    protected $PhoneNumber;

    /**
     * @var string
     */
    protected $CellPhoneNumber;

    /**
     * @var string
     */
    protected $Email;

    /**
     * Address constructor.
     *
     * @param $firstname
     * @param $lastname
     * @param $address1
     * @param $postalCode
     * @param $city
     * @param $countryCode
     * @param null $companyName
     * @param null $address2
     * @param null $cOAddress
     * @param null $phoneNumber
     * @param null $cellPhoneNumber
     * @param null $email
     */
    public function __construct(
        $firstname,
        $lastname,
        $address1,
        $postalCode,
        $city,
        $countryCode,
        $companyName = null,
        $address2 = null,
        $cOAddress = null,
        $phoneNumber = null,
        $cellPhoneNumber = null,
        $email = null
    ) {
        parent::__construct($address1, $address2, $cOAddress, $postalCode, $city, $countryCode);
        $this->Firstname = $firstname;
        $this->Lastname = $lastname;
        $this->Companyname = $companyName;
        $this->PhoneNumber = $phoneNumber;
        $this->CellPhoneNumber = $cellPhoneNumber;
        $this->Email = $email;
    }

    public function getFirstname()
    {
        return $this->Firstname;
    }

    public function getLastname()
    {
        return $this->Lastname;
    }

    public function getCompanyname()
    {
        return $this->Companyname;
    }

    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    public function getCellPhoneNumber()
    {
        return $this->CellPhoneNumber;
    }

    public function getEmail()
    {
        return $this->Email;
    }
}
