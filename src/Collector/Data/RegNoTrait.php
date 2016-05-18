<?php

namespace Collector\Data;

trait RegNoTrait {

  /**
   * @var string
   */
  protected $RegNo;

  /**
   * @param string $RegNo
   */
  public function setRegNo($RegNo) {
    $this->RegNo = $RegNo;
  }

  /**
   * @return string
   */
  public function getRegNo() {
    return $this->RegNo;
  }

}
