<?php

namespace Collector;

/**
 * Interface ServiceInterface.
 */
interface ServiceInterface
{
    /**
     * @return string
     */
    public function getWsdl();

    /**
     * @return string
     */
    public function getSchema();

    /**
     * @return string
     */
    public function getMethod();

    /**
     * @return mixed
     */
    public function getData();

    /**
     * @param $results
     *
     * @return mixed
     */
    public function parseResults($results);
}
