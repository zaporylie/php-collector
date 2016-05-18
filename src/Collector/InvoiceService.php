<?php

namespace Collector;

abstract class InvoiceService implements \JsonSerializable
{
    use Serializer;

    const WSDL = 'InvoiceServiceV32.svc';

    const SCHEMA = 'InvoiceService';

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
