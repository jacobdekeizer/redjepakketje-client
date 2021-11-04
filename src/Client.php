<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\ClientInterface;
use JacobDeKeizer\RedJePakketje\Endpoints;

class Client
{
    public const BASE_ENDPOINT = 'https://api.redjepakketje.nl/api/v2';

    private ClientInterface $httpClient;

    private string $apiKey;

    public function __construct()
    {
        $this->httpClient = new HttpClient();
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function setApiKey(string $apiKey): Client
    {
        $this->apiKey = trim($apiKey);

        return $this;
    }

    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    public function setHttpClient($httpClient): Client
    {
        $this->httpClient = $httpClient;

        return $this;
    }

    public function contacts(): Endpoints\ContactsEndpoint
    {
        return new Endpoints\ContactsEndpoint($this);
    }

    public function pickUpLocations(): Endpoints\PickUpLocationsEndpoint
    {
        return new Endpoints\PickUpLocationsEndpoint($this);
    }

    public function pickUpRules(): Endpoints\PickUpRulesEndpoint
    {
        return new Endpoints\PickUpRulesEndpoint($this);
    }

    public function returnShipments(): Endpoints\ReturnShipmentsEndpoint
    {
        return new Endpoints\ReturnShipmentsEndpoint($this);
    }

    public function shipments(): Endpoints\ShipmentsEndpoint
    {
        return new Endpoints\ShipmentsEndpoint($this);
    }

    public function senders(): Endpoints\SendersEndpoint
    {
        return new Endpoints\SendersEndpoint($this);
    }

    public function getEncodedApiKey(): string
    {
        return base64_encode($this->getApiKey() . ':');
    }
}
