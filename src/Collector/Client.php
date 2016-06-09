<?php

namespace Collector;

/**
 * Class Client.
 * @codeCoverageIgnore
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
    public function call($method, $data)
    {
        $path = $this->environment.$this->wsdl.self::WSDL_SUFFIX;
        $client = new \SoapClient($path, $this->options);

        $headers = array();

        $namespace = self::SCHEMA_PREFIX.$this->schema;

        $headers[] = new \SoapHeader($namespace, 'ClientIpAddress', $this->ip);
        $headers[] = new \SoapHeader($namespace, 'Username', $this->username);
        $headers[] = new \SoapHeader($namespace, 'Password', $this->password);
        $client->__setSoapHeaders($headers);

        try {
            $results = $client->{$method}($data);
        } catch (\Exception $e) {
            throw new ClientException($e->getMessage(), $e->getCode(), $e);
        }

        return $results;
    }
}
