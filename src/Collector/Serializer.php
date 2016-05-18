<?php

namespace Collector;

trait Serializer
{
    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $properties = get_object_vars($this);
        array_walk($properties, function (&$item, $key) {
            if (method_exists($this, 'get'.ucfirst($key))) {
                $item = $this->{'get'.ucfirst($key)}();
            } elseif (method_exists($this, '__get')) {
                $item = $this->__get($key);
            } else {
                $item = $this->{$key};
            }
        });

        return array_filter($properties);
    }
}
