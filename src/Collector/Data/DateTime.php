<?php

namespace Collector\Data;

class DateTime extends \DateTime implements \JsonSerializable
{

    const FORMAT = 'Y-m-d\TH:i:sP';

    public function jsonSerialize()
    {
        return $this->format(self::FORMAT);
    }
}
