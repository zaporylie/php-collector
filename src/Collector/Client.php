<?php

namespace Collector;

/**
 * Class Client.
 */
class Client implements ClientInterface
{
    const PRODUCTION = 'https://ecommerce.collector.se/v3.0/';

    const TEST = 'https://eCommerceTest.collector.se/v3.0/';

    const WSDL_SUFFIX = '?singleWsdl';

    const SCHEMA_PREFIX = 'http://schemas.ecommerce.collector.se/v30/';

    /**
     * @var array
     */
    public $options = [
        'trace' => true,
        'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
    ];

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
     * @var
     */
    protected $wsdl;

    /**
     * @var
     */
    protected $schema;

    /**
     * @var
     */
    protected $method;

    /**
     * @var
     */
    protected $data;

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @return string
     */
    public function getWsdl()
    {
        return $this->wsdl;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @param array $data
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param string $schema
     */
    public function setSchema($schema)
    {
        $this->schema = $schema;
    }

    /**
     * @param string $wsdl
     */
    public function setWsdl($wsdl)
    {
        $this->wsdl = $wsdl;
    }

    /**
     * Client constructor.
     *
     * @param string $username
     * @param string $password
     * @param string $environment
     */
    public function __construct($username, $password, $environment = self::TEST)
    {
        $this->username = $username;
        $this->password = $password;
        $this->ip = $_SERVER['SERVER_ADDR'];
        $this->environment = $environment;
    }

    /**
     * @return mixed
     *
     * @throws \Collector\ClientException
     */
    public function call()
    {
        $path = $this->environment.$this->getWsdl().self::WSDL_SUFFIX;
        $client = new \SoapClient($path, $this->options);

        $headers = array();

        $namespace = self::SCHEMA_PREFIX.$this->getSchema();

        $headers[] = new \SoapHeader($namespace, 'ClientIpAddress', $this->ip);
        $headers[] = new \SoapHeader($namespace, 'Username', $this->username);
        $headers[] = new \SoapHeader($namespace, 'Password', $this->password);
        $client->__setSoapHeaders($headers);

        try {
            $results = $client->{$this->getMethod()}($this->getData());
        } catch (\Exception $e) {
            throw new ClientException($e->getMessage(), $e->getCode(), $e);
        }

        return $results;
    }
}
