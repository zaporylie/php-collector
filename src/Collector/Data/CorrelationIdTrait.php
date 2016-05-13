<?php

namespace Collector\Data;

trait CorrelationIdTrait {

  /**
   * @var string
   */
  protected $correlationId;

  /**
   * @return string
   */
  public function getCorrelationId() {
    return $this->correlationId;
  }

  /**
   * @param string $correlationId
   */
  public function setCorrelationId($correlationId) {
    $this->correlationId = $correlationId;
  }

}