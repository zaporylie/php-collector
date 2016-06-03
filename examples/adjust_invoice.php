<?php

include __DIR__ . '/../vendor/autoload.php';

$yaml = new \Symfony\Component\Yaml\Parser();
$credentials = $yaml->parse(file_get_contents(__DIR__.'/config.yml'));

try {
    $client = new Collector\Client($credentials['username'], $credentials['password']);
    $rows = [
        new \Collector\Data\InvoiceRow('1234', 'Test', 3, 125, 25),
        new \Collector\Data\InvoiceRow('4321', 'Test2', 2, 600, 15),
    ];
    $address = new \Collector\Data\Address(
        'Tester',
        'Person',
        'Startveien 56',
        '9300',
        'FINNSENES',
        \Collector\Country::NORWAY
    );

    $invoice = new Collector\Invoice($client, \Collector\Country::NORWAY);
    $response = $invoice->addInvoice(new \Collector\Data\Invoice(
        '06073910828',
        'NOK',
        new \Collector\Data\DateTime('yesterday'),
        $rows,
        $address,
        $address,
        Collector\Invoice::EMAIL
    ))->activateInvoice()->adjustInvoice(
        '1234',
        'Test altered',
        -300,
        25
    )->getLastResponse();
    var_dump($response);
} catch (Exception $e) {
     var_dump($e);
}
