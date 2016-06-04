<?php

include __DIR__ . '/../vendor/autoload.php';

$yaml = new \Symfony\Component\Yaml\Parser();
$credentials = $yaml->parse(file_get_contents(__DIR__.'/config.yml'));

try {
    $client = new Collector\Client($credentials['username'], $credentials['password']);
    $information = new \Collector\Information($client, \Collector\Data\Country::NORWAY);
    $response = $information->getAccounts('RegNo', '06073910828');
    var_dump($response);
} catch (Exception $e) {
    var_dump($e);
}
