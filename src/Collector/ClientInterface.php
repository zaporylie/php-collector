<?php

namespace Collector;

/**
 * Class Client.
 */
interface ClientInterface
{

    public function setWsdl($wsdl);

    public function setSchema($schema);

    public function call($method, $data);
}
