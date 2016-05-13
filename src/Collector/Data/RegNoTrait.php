<?php

namespace Collector\Data;

trait RegNoTrait {

  /**
   * @var string
   */
  protected $regNo;

  /**
   * @param string $regNo
   */
  public function setRegNo($regNo) {
    $this->regNo = $regNo;
  }

  /**
   * @return string
   */
  public function getRegNo() {
    return $this->regNo;
  }
  
}
