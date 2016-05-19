<?php

include __DIR__ . '/../vendor/autoload.php';

$yaml = new \Symfony\Component\Yaml\Parser();
$credentials = $yaml->parse(file_get_contents(__DIR__.'/config.yml'));

try {
    $client = new Collector\Client($credentials['username'], $credentials['password']);

    $invoice = new Collector\Request\GetAccounts(\Collector\Country::NORWAY);
    $invoice->setRegNo('06073910828');
    $client->setService($invoice);
    var_dump($client->call());
} catch (Exception $e) {
    var_dump($e);
}
