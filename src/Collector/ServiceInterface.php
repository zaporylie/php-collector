<?php

namespace Collector;

interface ServiceInterface {

  /**
   * @return string
   */
  function getWsdl();

  /**
   * @return string
   */
  function getSchema();

  /**
   * @return string
   */
  function getMethod();

  /**
   * @return mixed
   */
  function getData();

  /**
   * @param $results
   * @return mixed
   */
  function parseResults($results);

}
