<?php

namespace Collector;

abstract class InvoiceService implements \JsonSerializable {

  const WSDL = 'InvoiceServiceV32.svc';

  const SCHEMA = 'InvoiceService';

  use Serializer;

  /**
   * {@inheritdoc}
   */
  public function getWsdl() {
    return self::WSDL;
  }

  /**
   * {@inheritdoc}
   */
  public function getSchema() {
    return self::SCHEMA;
  }

  /**
   * {@inheritdoc}
   */
  public function parseResults($results) {
    return $results;
  }

  /**
   * @return mixed
   */
  function getData() {
    return json_decode(json_encode($this), TRUE);
  }

}
