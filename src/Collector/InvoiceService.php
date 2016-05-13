<?php

namespace Collector;

class InvoiceService {

  const wsdl = 'InvoiceServiceV32.svc';

  const schema = 'InvoiceService';

  var $data;

  /**
   * {@inheritdoc}
   */
  public function getWsdl() {
    return self::wsdl;
  }

  /**
   * {@inheritdoc}
   */
  public function getSchema() {
    return self::schema;
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
  public function getData() {
    return $this->data;
  }

}
