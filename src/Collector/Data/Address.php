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
     * @var string
     */
    protected $CountryCode;

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
    
        $this->Firstname = $firstname;
        $this->Lastname = $lastname;
        $this->Address1 = $address1;
        $this->PostalCode = $postalCode;
        $this->City = $city;
        $this->CountryCode = $countryCode;
        $this->Companyname = $companyName;
        $this->Address2 = $address2;
        $this->COAddress = $cOAddress;
        $this->PhoneNumber = $phoneNumber;
        $this->CellPhoneNumber = $cellPhoneNumber;
        $this->Email = $email;
    }
}
