<?php

namespace Collector\Data;

trait HeaderTrait {

  use CorrelationIdTrait;

  /**
   * @var int
   */
  protected $storeId;

  /**
   * @var string
   */
  protected $CountryCode;

  /**
   * @return int
   */
  public function getStoreId() {
    return $this->storeId;
  }

  /**
   * @param int $storeId
   */
  public function setStoreId($storeId) {
    $this->storeId = $storeId;
  }

  /**
   * @return string
   */
  public function getCountryCode() {
    return $this->CountryCode;
  }

  /**
   * @param string $CountryCode
   */
  public function setCountryCode($CountryCode) {
    $this->CountryCode = $CountryCode;
  }

}
