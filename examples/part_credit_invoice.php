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
    $invoice = new Collector\Request\AddInvoice(
        \Collector\Country::NORWAY,
        '06073910828',
        'NOK',
        new \DateTime('yesterday'),
        $rows,
        $address,
        $address,
        \Collector\Data\InvoiceDeliveryMethodTrait::$InvoiceDeliveryMethodEmail
    );
    $client->setService($invoice);
    var_dump($old = $client->call());

    $invoice = new Collector\Request\ActivateInvoice(\Collector\Country::NORWAY, $old->InvoiceNo);
    $client->setService($invoice);
    var_dump($new = $client->call());

    $rows = [ new \Collector\Data\ArticleList('1234', 'Test', 2) ];
    $invoice = new Collector\Request\PartCreditInvoice(
        \Collector\Country::NORWAY,
        $old->InvoiceNo,
        new \DateTime(),
        $rows
    );
    $client->setService($invoice);
    var_dump($new = $client->call());
} catch (Exception $e) {
    var_dump($e);
}
