<?php

namespace Collector;

use Collector\Data\HeaderTrait;

/**
 * Class InformationService
 * @package Collector
 */
abstract class InformationService implements \JsonSerializable
{
    use Serializer;
    use HeaderTrait;

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
