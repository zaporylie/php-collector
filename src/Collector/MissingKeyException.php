<?php

namespace Collector;

/**
 * Class MissingKeyException
 */
class MissingKeyException extends \Exception
{
    protected $key;

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    public function __construct($key, $message = "", $code = 0, \Exception $previous = null)
    {
        $this->key = $key;
        parent::__construct($message, $code, $previous);
        if (empty($this->message)) {
            $this->message = "Missing key: $this->key";
        }
    }
}
