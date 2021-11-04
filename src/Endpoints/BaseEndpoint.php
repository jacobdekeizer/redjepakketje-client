<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Endpoints;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use JacobDeKeizer\RedJePakketje\Client;
use JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException;
use JsonException;
use Psr\Http\Message\ResponseInterface;

abstract class BaseEndpoint
{
    protected const GET = 'GET';
    protected const POST = 'POST';
    protected const PATCH = 'PATCH';
    protected const PUT = 'PUT';
    protected const DELETE = 'DELETE';

    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @throws RedJePakketjeException
     */
    protected function doRequest(
        string $httpMethod,
        string $apiRoute,
        ?array $httpBody = [],
        array $requestHeaders = []
    ): array {
        $url = Client::BASE_ENDPOINT . '/' . $apiRoute;

        try {
            $httpBody = $httpBody !== null ? json_encode($httpBody, JSON_THROW_ON_ERROR) : null;
        } catch (JsonException $jsonException) {
            throw RedJePakketjeException::fromPrevious('Could not encode json data.', $jsonException);
        }

        $response = $this->doRawRequest($httpMethod, $url, $httpBody, $requestHeaders);

        $body = $response->getBody()->getContents();

        if (empty($body)) {
            $data = [];
        } else {
            try {
                $data = json_decode($body, true, 512, JSON_THROW_ON_ERROR | JSON_OBJECT_AS_ARRAY);
            } catch (JsonException $jsonException) {
                throw RedJePakketjeException::fromPrevious('Unable to decode api response: ' . $body, $jsonException);
            }
        }

        return $data;
    }

    /**
     * @throws RedJePakketjeException
     */
    protected function doRawRequest(
        string $httpMethod,
        string $url,
        ?string $httpBody = null,
        array $requestHeaders = []
    ): ResponseInterface {
        $requestHeaders = array_merge($requestHeaders, [
            'Authorization' => ['Basic ' . $this->client->getEncodedApiKey()],
            'Accept' => 'application/json'
        ]);

        if ($httpBody !== null) {
            $requestHeaders['Content-Type'] = 'application/json';
        }

        $request = new Request($httpMethod, $url, $requestHeaders, $httpBody);

        try {
            $response = $this->client->getHttpClient()->send($request, ['http_errors' => false]);
        } catch (GuzzleException $e) {
            throw RedJePakketjeException::fromPrevious('Error connecting to api: ' . $e->getMessage(), $e);
        }

        if ($response->getStatusCode() >= 400) {
            throw new RedJePakketjeException(
                'Error executing api call: ' . ($data['error_message'] ?? '-')
                . ', StatusCode: ' . $response->getStatusCode(),
                $response->getStatusCode()
            );
        }

        return $response;
    }
}
