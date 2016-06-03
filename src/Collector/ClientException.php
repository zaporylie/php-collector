<?php

namespace Collector;

use Collector\Error\Restricted;
use Collector\Error\Unrestricted;

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
        if ($debug && isset(Restricted::${$this->faultCode})) {
            return Restricted::${$this->faultCode};
        }
        if ($language && isset(Unrestricted::${$language}[$this->faultCode])) {
            return Unrestricted::${$language}[$this->faultCode];
        }
        if (isset(Unrestricted::${$this->faultCode})) {
            return Unrestricted::${$this->faultCode};
        } else {
            return Unrestricted::$UNHANDLED_EXCEPTION;
        }
    }
}
