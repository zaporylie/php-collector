<?php

namespace Collector;

use Collector\Data\HeaderTrait;

class Information implements InformationInterface, ServiceInterface
{

    use HeaderTrait;

    const WSDL = 'Informationservice.svc';
    const SCHEMA = 'InformationService';

    /**
     * @var \Collector\ClientInterface
     */
    protected $client;

    /**
     * @var mixed
     */
    protected $lastResponse;

    /**
     * Information constructor.
     * @param \Collector\ClientInterface $client
     * @param string $countryCode
     */
    public function __construct(ClientInterface $client, $countryCode)
    {
        $this->client = $client;
        $this->setCountryCode($countryCode);
    }

    /**
     * @return mixed
     */
    public function getLastResponse()
    {
        return $this->lastResponse;
    }

    public function getAccounts($key, $value)
    {
        $data = [
            $key => $value,
        ];
        $data = $this->getData($data);
        $response = $this->call('GetAccounts', $data);
        $response->Accounts = $response->Accounts->Account;
        return $response;
    }

    public function getAccountTransactions($key, $value)
    {
        $data = [
            $key => $value,
        ];
        $data = $this->getData($data);
        $response = $this->call('GetAccountTransactions', $data);
        $response->Transactions = $response->Transactions->Transaction;
        return $response;
    }

    public function getCurrentInvoice($key, $value)
    {
        $data = [
            $key => $value,
        ];
        $data = $this->getData($data);
        return $this->call('GetCurrentInvoice', $data);
    }

    /**
     * @param string $method
     * @param array $data
     * @return mixed
     */
    protected function call($method, array $data = [])
    {
        $this->client->setWsdl(self::WSDL);
        $this->client->setSchema(self::SCHEMA);
        $response = $this->client->call($method, $data);
        $this->setLastResponse($response);
        return $response;
    }

    /**
     * @param mixed $lastResponse
     */
    protected function setLastResponse($lastResponse)
    {
        $this->lastResponse = $lastResponse;
    }

    /**
     * @return array
     */
    protected function getHeader()
    {
        return [
            'CountryCode' => $this->getCountryCode(),
            'CorrelationId' => $this->getCorrelationId(),
            'StoreId' => $this->getStoreId(),
        ];
    }

    /**
     * @param array $data
     * @return array
     */
    protected function getData($data = [])
    {
        $data = json_decode(json_encode($data), true) + $this->getHeader();
        return array_filter($data);
    }
}
