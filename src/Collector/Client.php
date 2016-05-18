<?php

namespace Collector;

/**
 * Class Client
 * @package Collector
 */
class Client {

  const PRODUCTION = 'https://ecommerce.collector.se/v3.0/';

  const TEST = 'https://eCommerceTest.collector.se/v3.0/';

  const WSDL_SUFFIX = '?singleWsdl';

  const SCHEMA_PREFIX = 'http://schemas.ecommerce.collector.se/v30/';

  /**
   * @var array
   */
  public $options = array(
    'trace' => TRUE,
    'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
  );

  /**
   * @var string
   */
  protected $username;

  /**
   * @var string
   */
  protected $password;

  /**
   * @var string
   */
  protected $environment;

  /**
   * @var string
   */
  protected $ip;

  /**
   * @var ServiceInterface
   */
  protected $service;

  /**
   * Client constructor.
   *
   * @param string $username
   * @param string $password
   * @param string $environment
   */
  public function __construct($username, $password, $environment = self::TEST) {
    $this->username = $username;
    $this->password = $password;
    $this->ip = $_SERVER['SERVER_ADDR'];
    $this->environment = $environment;
  }

  /**
   * @param \Collector\ServiceInterface $service
   */
  public function setService(ServiceInterface $service) {
    $this->service = $service;
  }

  /**
   * @return mixed
   * @throws \Collector\ClientException
   */
  public function call() {
    $path = $this->environment . $this->service->getWsdl() . self::WSDL_SUFFIX;
    $client = new \SoapClient($path, $this->options);

    $headers = array();

    $namespace = self::SCHEMA_PREFIX . $this->service->getSchema();

    $headers[] = new \SoapHeader($namespace, 'ClientIpAddress', $this->ip);
    $headers[] = new \SoapHeader($namespace, 'Username', $this->username);
    $headers[] = new \SoapHeader($namespace, 'Password', $this->password);
    $client->__setSoapHeaders($headers);

    try {
      var_dump($this->service->getData());
      $results = $client->{$this->service->getMethod()}($this->service->getData());
    }
    catch(\Exception $e) {
      throw new ClientException($e->getMessage(), $e->getCode(), $e);
    }

    return $this->service->parseResults($results);
  }

}
