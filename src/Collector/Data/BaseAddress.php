<?php

namespace Collector\Data;

use Collector\Serializer;

/**
 * Class BaseAddress
 * @package Collector\Data
 */
class BaseAddress implements \JsonSerializable {

  use Serializer;

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
   * @return string
   */
  public function getAddress1() {
    return $this->Address1;
  }

  /**
   * @return string
   */
  public function getAddress2() {
    return $this->Address2;
  }

  /**
   * @return string
   */
  public function getCOAddress() {
    return $this->COAddress;
  }

  /**
   * @return string
   */
  public function getPostalCode() {
    return $this->PostalCode;
  }

  /**
   * @return string
   */
  public function getCity() {
    return $this->City;
  }

  /**
   * @return string
   */
  public function getCountryCode() {
    return $this->CountryCode;
  }
}
