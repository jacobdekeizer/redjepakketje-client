<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Exceptions;

use Exception;
use JacobDeKeizer\RedJePakketje\Models\ResponseError;
use JsonException;
use Psr\Http\Message\ResponseInterface;
use Throwable;

class RedJePakketjeException extends Exception
{
    private const JSON_ERROR_CODE = 1234; // custom number

    private ?ResponseInterface $response;

    protected ?ResponseError $responseError;

    public function __construct(
        string $message = "",
        int $code = 0,
        Throwable $previous = null,
        ?ResponseInterface $response = null,
        ?ResponseError $responseError = null,
    ) {
        parent::__construct($message, $code, $previous);

        $this->response = $response;
        $this->responseError = $responseError;
    }

    public static function fromJsonException(JsonException $jsonException, ?ResponseInterface $response = null): self
    {
        return new self(
            message: $jsonException->getMessage(),
            code: self::JSON_ERROR_CODE,
            previous: $jsonException,
            response: $response
        );
    }

    public static function fromJsonResponse(ResponseInterface $response, array $json): self
    {
        $message = $json['error_message'] ?? '-';
        $code = $response->getStatusCode();
        $responseError = ResponseError::fromArray($json);

        return new RedJePakketjeException(
            message: 'Error response from Red je Pakketje api: ' . $message  . ', StatusCode: ' . $code,
            code: $response->getStatusCode(),
            previous: null,
            response: $response,
            responseError: $responseError
        );
    }

    public static function fromResponse(ResponseInterface $response): self
    {
        $code = $response->getStatusCode();

        return new RedJePakketjeException(
            message: 'Error response from Red je Pakketje api with StatusCode: ' . $code,
            code: $response->getStatusCode(),
            previous: null,
            response: $response,
        );
    }

    public function isJsonError(): bool
    {
        return $this->code === self::JSON_ERROR_CODE;
    }

    public function hasResponse(): bool
    {
        return $this->response !== null;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }

    public function hasResponseError(): bool
    {
        return $this->responseError !== null;
    }

    public function getResponseError(): ?ResponseError
    {
        return $this->responseError;
    }
}
