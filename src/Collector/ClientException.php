<?php

namespace Collector;

/**
 * Class ClientException
 * @package Collector
 */
class ClientException extends \Exception {

  protected $exception;

  public function __constructor($message, $code, \SoapFault $exception) {
    $this->exception = $exception;
    parent::__construct($message, $code);
  }

  public function getException() {
    return $this->exception;
  }
}
