<?php

namespace Collector;

use Collector\Error\Internal;
use Collector\Error\External;

/**
 * Class ClientException.
 */
class ClientException extends \Exception
{
    /**
     * @var string
     */
    protected $faultCode;

    /**
     * {@inheritdoc}
     */
    public function __construct($message, $code, \Exception $previous)
    {
        parent::__construct($message, $code, $previous);
        if (property_exists($previous, 'faultcode')) {
            $this->faultCode = str_replace('s:', '', $previous->faultcode);
        }
    }

    /**
     * Get Fault message based on fault code.
     *
     * @param null|string $language
     * @param bool $debug
     * @return string
     */
    public function getFaultMessage($language = null, $debug = false)
    {
        if (!isset($this->faultCode)) {
            $this->faultCode = 'UNHANDLED_EXCEPTION';
        }
        if ($debug && isset(Internal::${$this->faultCode})) {
            return Internal::${$this->faultCode};
        }
        if ($language && isset(External::${$language}[$this->faultCode])) {
            return External::${$language}[$this->faultCode];
        }
        if (isset(External::${$this->faultCode})) {
            return External::${$this->faultCode};
        } else {
            return External::$UNHANDLED_EXCEPTION;
        }
    }
}
