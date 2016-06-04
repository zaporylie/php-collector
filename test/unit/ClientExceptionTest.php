<?php

namespace Collector\Test;

use Collector\ClientException;
use Collector\Data\Country;
use Collector\Error\Restricted;
use Collector\Error\Unrestricted;

class ClientExceptionTest extends \PHPUnit_Framework_TestCase
{


    /**
     * @var ClientException
     */
    private $exception;

    public function setUp()
    {
        $e = new \Exception();
        $e->faultcode = 's:DENIED_TO_PURCHASE';
        $this->exception = new ClientException(null, null, $e);
    }

    public function testLanguage()
    {
        $language = Country::NORWAY;
        $message = $this->exception->getFaultMessage($language);
        $this->assertEquals(Unrestricted::${$language}['DENIED_TO_PURCHASE'], $message);
    }

    public function testDebug()
    {
        $message = $this->exception->getFaultMessage(Country::NORWAY, true);
        $this->assertEquals(Restricted::DENIED_TO_PURCHASE, $message);
    }

    public function testDefaultLanguage()
    {
        $exception = new ClientException(null, null, new \Exception());
        $message = $exception->getFaultMessage();
        $this->assertEquals(Unrestricted::UNHANDLED_EXCEPTION, $message);
    }

    public function testMissingFaultCode()
    {
        $exception = new ClientException(null, null, new \Exception());
        $message = $exception->getFaultMessage(Country::NORWAY, true);
        $this->assertEquals(Restricted::UNHANDLED_EXCEPTION, $message);
    }

    public function testIncorrectFaultCode()
    {
        $e = new \Exception();
        $e->faultcode = 's:FTW';
        $exception = new ClientException(null, null, $e);
        $message = $exception->getFaultMessage(Country::NORWAY, true);
        $this->assertEquals(Unrestricted::DENIED_TO_PURCHASE, $message);
    }
}
