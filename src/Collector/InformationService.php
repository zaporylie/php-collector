<?php

namespace Collector;

/**
 * Class InformationService
 * @package Collector
 */
abstract class InformationService implements \JsonSerializable
{
    use Serializer;

    const WSDL = 'Informationservice.svc';

    const SCHEMA = 'InformationService';

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
