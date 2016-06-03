<?php

namespace Collector;

/**
 * Class Client.
 */
interface ClientInterface
{

  /**
   * @param string $wsdl
   */
    public function setWsdl($wsdl);

  /**
   * @param string $schema
   */
    public function setSchema($schema);

  /**
   * @param string $method
   */
    public function setMethod($method);

  /**
   * @param array $data
   */
    public function setData(array $data);

  /**
   * @return mixed
   *
   * @throws \Collector\ClientException
   */
    public function call();
}
