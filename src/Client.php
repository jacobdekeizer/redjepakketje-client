<?php

namespace JacobDeKeizer\RedJePakketje;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use JacobDeKeizer\RedJePakketje\Endpoints;
use JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException;
use Psr\Http\Message\ResponseInterface;

class Client
{
    public const BASE_ENDPOINT = 'https://api.redjepakketje.nl/api/v1';

    /**
     * @var HttpClient
     */
    private $client;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var Endpoints\Contacts
     */
    private $contacts;

    /**
     * @var Endpoints\CutOffTimes
     */
    private $cutOffTimes;

    /**
     * @var Endpoints\PickUps
     */
    private $pickUps;

    /**
     * @var Endpoints\Returns
     */
    private $returns;

    /**
     * @var Endpoints\Shipments
     */
    private $shipments;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->client = new HttpClient([
            'base_uri' => self::BASE_ENDPOINT,
        ]);

        $this->contacts = new Endpoints\Contacts($this);
        $this->cutOffTimes = new Endpoints\CutOffTimes($this);
        $this->pickUps = new Endpoints\PickUps($this);
        $this->returns = new Endpoints\Returns($this);
        $this->shipments = new Endpoints\Shipments($this);
    }

    /**
     * @param string $httpMethod
     * @param string $apiRoute
     * @param null|string $httpBody
     * @param array $requestHeaders
     * @return string|object|null
     * @throws RedJePakketjeException
     */
    public function doRequest(string $httpMethod, string $apiRoute, ?string $httpBody = null, array $requestHeaders = [])
    {
        $url = self::BASE_ENDPOINT . '/' . $apiRoute;

        $response = $this->doRawRequest($httpMethod, $url, $httpBody, $requestHeaders);

        if (!$response) {
            throw new RedJePakketjeException('No api response received.');
        }

        $body = $response->getBody()->getContents();

        $object = @json_decode($body);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new RedJePakketjeException('Unable to decode api response: ' . $body);
        }

        if ($response->getStatusCode() >= 400) {
           throw new RedJePakketjeException(
               'Error executing api call: ' . $object->error_message . ', StatusCode: ' . $response->getStatusCode(),
               $response->getStatusCode()
           );
        }

        return $object;
    }

    /**
     * @param string $httpMethod
     * @param string $url
     * @param null|string $httpBody
     * @param array $requestHeaders
     * @return ResponseInterface|null
     * @throws RedJePakketjeException
     */
    public function doRawRequest(string $httpMethod, string $url, ?string $httpBody = null, array $requestHeaders = []): ?ResponseInterface
    {
        $requestHeaders = array_merge($requestHeaders, [
            'Authorization' => ['Basic ' . $this->getEncodedApiKey()],
            'Accept' => 'application/json'
        ]);

        if ($httpBody !== null) {
            $requestHeaders['Content-Type'] = 'application/json';
        }

        $request = new Request($httpMethod, $url, $requestHeaders, $httpBody);

        try {
            $response = $this->client->send($request, ['http_errors' => false]);
        } catch (GuzzleException $e) {
            throw RedJePakketjeException::fromPrevious('Error connecting to api: ' . $e->getMessage(), $e);
        }

        return $response ?? null;
    }

    /**
     * @param string $apiKey
     * @return Client
     */
    public function setApiKey(string $apiKey): Client
    {
        $this->apiKey = trim($apiKey);

        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @return Endpoints\Contacts
     */
    public function contacts(): Endpoints\Contacts
    {
        return $this->contacts;
    }

    /**
     * @return Endpoints\CutOffTimes
     */
    public function cutOffTimes(): Endpoints\CutOffTimes
    {
        return $this->cutOffTimes;
    }

    /**
     * @return Endpoints\PickUps
     */
    public function pickUps(): Endpoints\PickUps
    {
        return $this->pickUps;
    }

    /**
     * @return Endpoints\Returns
     */
    public function returns(): Endpoints\Returns
    {
        return $this->returns;
    }

    /**
     * @return Endpoints\Shipments
     */
    public function shipments(): Endpoints\Shipments
    {
        return $this->shipments;
    }

    /**
     * @return string
     */
    private function getEncodedApiKey(): string
    {
        return base64_encode($this->getApiKey() . ':');
    }
}