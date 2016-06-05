<?php

namespace Collector\Data;

class DateTimeTest extends \PHPUnit_Framework_TestCase
{

    protected $dateTime;

    public function setUp()
    {
        $this->dateTime = new DateTime();
        $this->dateTime->setTimezone(new \DateTimeZone('Europe/London'));
        $this->dateTime->setTimestamp(946684800);
    }

    public function testSerialization()
    {
        $serialized = json_encode($this->dateTime);
        $this->assertEquals(json_encode("2000-01-01T00:00:00+00:00"), $serialized);
    }
}
