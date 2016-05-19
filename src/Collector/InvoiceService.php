<?php

namespace Collector;

use Collector\Data\HeaderTrait;

abstract class InvoiceService implements \JsonSerializable
{
    use Serializer;
    use HeaderTrait;

    const WSDL = 'InvoiceServiceV32.svc';

    const SCHEMA = 'InvoiceService';

    /**
     * InvoiceService constructor.
     * @param string $countryCode
     */
    public function __construct($countryCode)
    {
        $this->CountryCode = $countryCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getWsdl()
    {
        return self::WSDL;
    }

    /**
     * {@inheritdoc}
     */
    public function getSchema()
    {
        return self::SCHEMA;
    }

    /**
     * {@inheritdoc}
     */
    public function parseResults($results)
    {
        return $results;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return json_decode(json_encode($this), true);
    }
}
